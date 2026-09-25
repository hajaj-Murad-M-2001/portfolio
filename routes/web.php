<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExperienceController;
use App\Models\Project;

// عرض الصفحة الرئيسية للبورتفوليو مع جلب المشاريع والمهارات
Route::get('/', [HomeController::class, 'index']);

// استقبال وحفظ رسائل نموذج الاتصال
Route::post('/contact', [HomeController::class, 'storeMessage'])->name('contact.store');

// عرض صفحة About عبر AboutController لتمرير متغير $stats
Route::get('/about', [AboutController::class, 'index'])->name('about');

// عرض صفحة المشاريع
Route::get('/projects', function () {
    $projects = Project::all(); 
    return view('projects', compact('projects'));
})->name('projects');

// عرض صفحة Experience عبر ExperienceController
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');