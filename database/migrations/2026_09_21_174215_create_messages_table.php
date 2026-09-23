<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');      // اسم المرسل
            $table->string('email');     // بريد المرسل
            $table->text('message');     // نص الرسالة
            $table->string('ip_address')->nullable();   // عنوان الـ IP لتتبع المصدر والحماية
            $table->text('user_agent')->nullable();     // نوع المتصفح ونظام التشغيل للزائر
            $table->boolean('is_read')->default(false); // حالة الرسالة: هل تمت قراءتها أم لا
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};