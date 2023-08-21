<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Data = [
            [
                'title' => 'HUMBER COLLEGE WEB DEVELOPMENT',
                'duration' => '(Full-time)',
                'Timeline' => '2023',
                'description' =>
                    "In 2023, I decided to attend Humber College to learn about web development and kickstart a new career. My time at Humber was about more than just technical skills; it was a time of personal growth. I learned how crucial it is to keep learning, be adaptable, and stay creative in the fast-changing world of web development. This experience sparked my passion for innovation, and I'm excited about the opportunities that await in my new and exciting career.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'COLOUR FAST TECHNOLOGIES',
                'duration' => '(Full-time)',
                'Timeline' => '2015',
                'description' =>
                    "In 2015, I joined ColorFast Technology as a Mechanical Operations Technician. My job was more than just mechanical work - I worked closely with sales teams and the IT department to meet our clients' needs. I handled tasks like assembling and maintaining machines, training operators to use them, and adapting to any changes our clients wanted. Each day, I created reports to track our progress in different areas. This role taught me a lot about teamwork, adaptability, and effective communication, and I found it fulfilling to contribute to ColorFast Technology's success while making sure our clients were happy.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FREELANCE',
                'duration' => '(Part-time)',
                'Timeline' => '2015',
                'description' =>
                    "In my Front-end Developer role, I teamed up with a web designer to create an E-commerce website. Using CSS, HTML, and JavaScript, I built a simple and responsive website structure. My main focus was working closely with the designer to make the website look good and easy to use. We made sure the product pages were organized, added a shopping cart, and made the checkout process smooth. This project taught me how to turn design ideas into a real website, and I realized the importance of teamwork between designers and developers. It felt great to create a user-friendly online shopping experience, and I'm proud of the skills I gained from this opportunity.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SENECA COLLEGE',
                'duration' => '(Part-time)',
                'Timeline' => '2015',
                'description' =>
                    'At Seneca College, I gained valuable hands-on experience, learning how to write code, design algorithms, and solve problems using Java and C++. The courses I took helped me understand the principles of object-oriented programming, data structures, and the essential skills needed to develop software applications.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('Experience')->insert($Data);
    }
}
