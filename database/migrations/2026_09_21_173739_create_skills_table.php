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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // اسم المهارة (مثل: PHP, Laravel, React)
            $table->string('percentage')->nullable(); // النسبة أو المستوى (مثل: 90%)
            $table->string('icon')->nullable();       // أيقونة المهارة (مثل فئة FontAwesome أو مسار صورة)
            $table->string('category')->nullable();   // تصنيف المهارة (مثل: Backend, Frontend, Tools)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};