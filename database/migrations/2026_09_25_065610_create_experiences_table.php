<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            // "Education" / "Software Development" / "IT Support" / "Internship" / "Field Data" / "Operations & Finance"
            $table->string('category');

            // "Software Engineering & IT"
            $table->string('title');

            // "Bachelor's Degree · Islamic University"
            $table->string('subtitle')->nullable();

            // نص التاريخ الظاهر بالبطاقة، مثال: "Graduated 2024" أو "Dec 2025 – Jan 2026"
            $table->string('period_label');

            // تاريخ فعلي للترتيب الزمني (أول يوم بالفترة)
            $table->date('start_date');

            $table->text('description')->nullable();

            // مصفوفة الوسوم الصغيرة أسفل كل بطاقة، مخزّنة كـ JSON
            $table->json('tags')->nullable();

            // البطاقة اللي بتاخذ الستايل المميز (نقطة معبّأة + badge أزرق) بدل الشكل العادي
            $table->boolean('is_featured')->default(false);

            // ترتيب العرض يدوياً (الأحدث/الأهم فوق)، مستقل عن start_date
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};