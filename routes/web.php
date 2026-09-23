<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Project;

// عرض الصفحة الرئيسية للبورتفوليو مع جلب المشاريع والمهارات
Route::get('/', [HomeController::class, 'index']);

// استقبال وحفظ رسائل نموذج الاتصال
Route::post('/contact', [HomeController::class, 'storeMessage'])->name('contact.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    // يمكنك جلب المشاريع من قاعدة البيانات أو تمريرها كمصفوفة
    $projects = Project::all(); 
    return view('projects', compact('projects'));
})->name('projects');

// الطريقة الصحيحة لعرض صفحة تعتمد على View مباشرة باستخدام Route::view
Route::view('/experience', 'Experience')->name('experience');