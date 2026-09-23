<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Mail\NewContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactApiController extends Controller
{
    public function store(Request $request)
    {
        // 1. حماية السبام: Rate Limiting (السماح بـ 3 محاولات كل دقيقة لكل IP)
        $rateLimitKey = 'contact-api:' . $request->ip();
        if (RateLimiter::tooManyAttempts($rateLimitKey, 3)) {
            $seconds = RateLimiter::availableIn($rateLimitKey);
            return response()->json([
                'status' => 'error',
                'message' => "الرجاء الانتظار لمدة {$seconds} ثانية قبل إرسال رسالة أخرى."
            ], 429);
        }
        RateLimiter::hit($rateLimitKey, 60);

        // 2. حماية السبام: Honeypot (إذا تم ملء حقل website_url الوهمي، فهذا بوت سبام)
        if ($request->filled('website_url')) {
            return response()->json([
                'status' => 'success',
                'message' => 'تم إرسال الرسالة بنجاح.'
            ], 200);
        }

        // 3. التحقق من صحة المدخلات (Validation)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // 4. فلترة كلمات السبام والروابط المشبوهة
        $spamKeywords = ['casino', 'crypto-giveaway', 'lottery', '1xbet'];
        foreach ($spamKeywords as $keyword) {
            if (str_contains(strtolower($validated['message']), $keyword)) {
                // نعيد نجاح وهمي للبوت لكي لا يعيد المحاولة
                return response()->json([
                    'status' => 'success',
                    'message' => 'تم إرسال الرسالة بنجاح.'
                ], 200);
            }
        }

        // 5. تخزين البيانات في قاعدة البيانات مع الـ IP والـ User Agent وحالة القراءة
        $message = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'is_read' => false,
        ]);

        // 6. إرسال إيميل إشعار لك في الخلفية عبر الـ Queue (بدون أي تأخير للمستخدم)
        Mail::to('your-email@example.com')->queue(new NewContactMessageMail($message));

        // 7. الرد بصيغة JSON ناجحة
        return response()->json([
            'status' => 'success',
            'message' => 'تم استلام رسالتك وتخزينها بنجاح!',
            'data' => $message
        ], 201);
    }
}