<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class AboutController extends Controller
{
    public function index()
    {
        // FIX (Backend touch): الأرقام والأدوات صارت مركزية بمكان واحد
        // (الـ Controller) بدل ما تكون مكتوبة داخل الـ Blade مباشرة.
        // لو حبيت لاحقاً تحسب "years" فعلياً من تاريخ أقدم خبرة بدل رقم
        // ثابت، ممكن تستبدلها بسطر زي:
        // $years = now()->diffInYears(Experience::min('start_date')) ?: 2;

        $stats = [
            'accuracy' => 99,
            'years'    => 2,
            'projects' => 6,
        ];

        $tools = [
            ['name' => 'Laravel',    'role' => 'Backend framework'],
            ['name' => 'PHP',        'role' => 'Programming language'],
            ['name' => 'Node.js',    'role' => 'Runtime'],
            ['name' => 'Express.js', 'role' => 'API framework'],
            ['name' => 'MongoDB',    'role' => 'Database'],
            ['name' => 'MySQL',      'role' => 'Database'],
            ['name' => 'REST APIs',  'role' => 'Architecture'],
            ['name' => 'Git',        'role' => 'Version control'],
        ];

        return view('about', compact('stats', 'tools'));
    }
}