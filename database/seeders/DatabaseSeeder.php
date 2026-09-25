<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // تفريغ البيانات القديمة لتجنب التكرار
        Project::truncate();
        Skill::truncate();
        Experience::truncate();

        // استدعاء ملف ExperienceSeeder لتعبئة جدول الخبرات
        $this->call([
            ExperienceSeeder::class,
        ]);

        // إضافة مشاريعك الحقيقية
        $projects = [
            [
                'title' => 'تطوير وتأمين نظام إدارة محتوى متكامل (Clean Blog CMS)',
                'description' => 'نظام إدارة محتوى احترافي مبني باستخدام إطار العمل Laravel مع نظام صلاحيات وآمان متكامل.',
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'تطوير منصة E-Restaurant المتكاملة',
                'description' => 'منصة طلب طعام إلكترونية بتجربة مستخدم فائقة (UX/UI) ولوحة تحكم لإدارة الطلبات والوجبات.',
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'تصميم وتطوير موقع شركة خدمات قانونية (LawTech)',
                'description' => 'موقع تعريفى احترافي لشركة خدمات قانونية يتميز بالسرعة والأمان والتصميم الراقي.',
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'برمجة وتصميم واجهات موقع تعليمي',
                'description' => 'واجهات تفاعلية متكاملة لموقع تعليمي لتجربة تصفح سلسة وسريعة للطلاب والمدرسين.',
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'تصميم وبرمجة واجهة لمطعم مأكولات',
                'description' => 'صفحة هبوط ترويجية احترافية لعرض قائمة الطعام بأسلوب تفاعلي جذاب.',
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'E-Commerce Web App',
                'description' => 'متجر إلكتروني متكامل باستخدام جافاسكريبت، PHP، وقاعدة بيانات MongoDB مع تحسين أداء REST APIs.',
                'link' => '#',
                'github' => '#',
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // إدخال المهارات التقنية
        $skills = [
            ['name' => 'PHP', 'percentage' => '90%', 'category' => 'Backend'],
            ['name' => 'Laravel', 'percentage' => '88%', 'category' => 'Backend'],
            ['name' => 'JavaScript', 'percentage' => '85%', 'category' => 'Frontend'],
            ['name' => 'React.js', 'percentage' => '80%', 'category' => 'Frontend'],
            ['name' => 'HTML & CSS', 'percentage' => '95%', 'category' => 'Frontend'],
            ['name' => 'SQL & MongoDB', 'percentage' => '90%', 'category' => 'Database'],
            ['name' => 'Git & GitHub', 'percentage' => '85%', 'category' => 'Tools'],
            ['name' => 'UI/UX & Responsive', 'percentage' => '90%', 'category' => 'Frontend'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}