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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');             // عنوان المشروع
            $table->text('description');         // وصف المشروع
            $table->string('image')->nullable();    // مسار صورة المشروع البارزة
            $table->string('link')->nullable();     // رابط المشروع الحي (Live Demo)
            $table->string('github')->nullable();   // رابط المستودع على جيت هب
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};