<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Data = [
            [
                'title' => 'Front-End',
                'description' => json_encode([
                    "I'm proficient in HTML, CSS, and JavaScript, and I love exploring the latest front-end technologies and frameworks like React, Redux, and Bootstrap. I excel at designing intuitive and interactive user interfaces using these tools.Additionally, I have a solid background in optimizing websites for top performance, ensuring accessibility for all users.",
                    "I'm also familiar with TypeScript, which helps enhance the reliability of my code. When it comes to tracking website performance, I've worked with Google Analytics to gain valuable insights. My skills extend to legacy systems as well; I've used jQuery effectively for dynamic and responsive web development.",
                ]),
                'listIcon' => json_encode([
                    'bootstrap-plain.png',
                    'react-original.png',
                    'redux-original.png',
                    'Js.png',
                    'typescript.png',
                    'icons8-google-analytics-96.png',
                    'jquery.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Back-End',
                'description' => json_encode([
                    "In addition to my strong front-end skills, I'm well-versed in back-end technologies that power robust web applications. I have experience working with databases, including MongoDB and MySQL, allowing me to efficiently manage data and create dynamic applications.. I'm also proficient in ASP.NET and Laravel, two powerful frameworks that provide a solid foundation for building secure and scalable back-end systems.",
                    "Additionally, I'm skilled in Node.js, enabling me to develop high-performance, real-time applications that can handle a large number of concurrent users. This comprehensive understanding of both front-end and back-end technologies allows me to create seamless and feature-rich web solutions.",
                ]),
                'listIcon' => json_encode([
                    'mongodb-plain-wordmark.png',
                    'mysql-original-wordmark.png',
                    'postgresql-plain.png',
                    'dot-net-original-wordmark.png',
                    'csharp-plain.png',
                    'laravel.png',
                    'nodejs-plain-wordmark.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tools',
                'description' => json_encode([
                    "When it comes to development, I'm not just limited to coding; I'm also skilled in using a variety of tools that streamline the entire process. GitHub is my go-to platform for version control, allowing me to collaborate seamlessly with teams and track changes effectively. I'm experienced in leveraging npm to manage project dependencies, ensuring a smooth and efficient workflow.",
                    "For my development environment, I'm comfortable with both Visual Studio and Visual Studio Code, leveraging their powerful features to write clean and efficient code while debugging with ease. My design skills are also strong, and I often use Figma to create intuitive user interfaces and collaborate closely with designers.",
                    "To ensure that my applications run smoothly in real-world scenarios, I utilize XAMPP for local server setup, allowing me to test and fine-tune my projects before deployment. Additionally, I have experience with Docker, enabling me to create isolated, portable, and consistent development environments, which is especially helpful when working on complex projects or collaborating with multiple teams. With this comprehensive set of tools, I'm well-equipped to handle the full lifecycle of web development, from ideation to deployment.",
                ]),
                'listIcon' => json_encode([
                    'git-original-wordmark.png',
                    'npm-original-wordmark.png',
                    'vs.png',
                    'vscode.png',
                    'figma_logo_brand_icon.png',
                    'xampp_icon.png',
                    'docker.png',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('Skill')->insert($Data);
    }
}
