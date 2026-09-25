<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'category'     => 'Education',
                'title'        => "Software Engineering & IT",
                'subtitle'     => "Bachelor's Degree · Islamic University",
                'period_label' => 'Graduated 2024',
                'start_date'   => '2024-06-01',
                'description'  => 'Comprehensive coursework in Software Development, Networking, Database Management, and Electronics, establishing a strong foundation in both software architecture and system engineering.',
                'tags'         => ['Software Engineering', 'Database Management', 'Networking'],
                'is_featured'  => true,
                'sort_order'   => 1,
            ],
            [
                'category'     => 'Software Development',
                'title'        => 'Software Development',
                'subtitle'     => 'Responsive Web Development & Back-End Foundations',
                'period_label' => 'Dec 2025 – Jan 2026',
                'start_date'   => '2025-12-01',
                'description'  => 'Developed responsive web projects with HTML, CSS, and JavaScript. Introduced to back-end concepts and built practical web projects using Git-based workflows.',
                'tags'         => ['HTML/CSS', 'JavaScript', 'Responsive Design', 'Git & GitHub'],
                'is_featured'  => false,
                'sort_order'   => 2,
            ],
            [
                'category'     => 'IT Support',
                'title'        => 'IT Support Training',
                'subtitle'     => 'Systems & Network Diagnostics',
                'period_label' => 'May 2025 – Jul 2025',
                'start_date'   => '2025-05-01',
                'description'  => 'Trained on diagnosing and resolving system and network issues, and on installing and configuring software and operating systems.',
                'tags'         => ['Networking', 'Troubleshooting', 'OS Configuration'],
                'is_featured'  => false,
                'sort_order'   => 3,
            ],
            [
                'category'     => 'Internship',
                'title'        => 'Software Development Intern',
                'subtitle'     => 'Applied Web Fundamentals',
                'period_label' => 'Jan 2025 – Apr 2025',
                'start_date'   => '2025-01-01',
                'description'  => 'Developed small applications using HTML, CSS, and JavaScript, trained on diagnosing system and network issues, and practiced version control with Git and GitHub.',
                'tags'         => ['HTML/CSS', 'JavaScript', 'Git & GitHub'],
                'is_featured'  => false,
                'sort_order'   => 4,
            ],
            [
                'category'     => 'Field Data',
                'title'        => 'Field Monitor & Data Collector',
                'subtitle'     => 'RCF Foundation · Gaza Strip, Palestine',
                'period_label' => 'Jan 2025 – Dec 2025',
                'start_date'   => '2025-01-01',
                'description'  => 'Coordinated field logistics and movement plans for data collection teams. Audited and verified field data using KoboToolbox, ensuring high data integrity, and prepared comprehensive movement reports.',
                'tags'         => ['KoboToolbox', 'Data Validation', 'Field Monitoring', 'Reporting'],
                'is_featured'  => false,
                'sort_order'   => 5,
            ],
            [
                'category'     => 'Operations & Finance',
                'title'        => 'Junior Accountant & Cashier',
                'subtitle'     => 'Saqalla Sweets · Gaza Strip, Palestine',
                'period_label' => 'Feb 2022 – Oct 2023',
                'start_date'   => '2022-02-01',
                'description'  => 'Managed financial records and accounts using the Al-Aseel Accounting System with a zero-error rate. Facilitated procurement, reviewed supplier invoices, and reconciled inventory for full resource accountability.',
                'tags'         => ['Al-Aseel Accounting', 'Financial Records', 'Inventory', 'Procurement'],
                'is_featured'  => false,
                'sort_order'   => 6,
            ],
        ];

        foreach ($items as $item) {
            Experience::updateOrCreate(
                ['title' => $item['title'], 'subtitle' => $item['subtitle']],
                $item
            );
        }
    }
}