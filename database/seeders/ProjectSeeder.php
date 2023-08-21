<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Data = [
            [
                'project_name' => 'UrbanBlendEsates',
                'description' => json_encode([
                    "UrbanBlendEstates is a joint project between me and my classmate, Nancy. We brought together my passion for Real Estate and her expertise in restaurant reviews. Our goal is simple: we want users to easily schedule property appointments and discover nearby restaurants that match their tastes. It's all about convenience and choice. UrbanBlendEstates is where you can find your dream home while exploring great dining options in the area.",
                    "We've utilized ASP.NET Entity to create a robust localhost environment, ensuring smooth data management. Additionally, our collaborative efforts on GitHub have allowed us to seamlessly combine and enhance our codebase. It's important to note that we developed this project utilizing the Model-View-Controller (MVC) architecture, enhancing the project's structure and maintainability.",
                ]),
                'skills' => json_encode([
                    'Collaborative Development',
                    'MVC Architecture',
                    'Real Estate',
                    'Restaurant Reviews',
                ]),
                'image_url' => './photo/Projects/FoodAndRealEsate.PNG',
                'project_view_url' =>
                    'https://github.com/MikeHuynh33/UrbanBlendEstates',
                'project_live_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'EcommerceCAM',
                'description' => json_encode([
                    'I used React for the front-end to ensure a responsive user interface, while Tailwind was employed for styling, providing a consistent and appealing design. On the back end, Node.js with Express was chosen to handle server-side operations and data management.',
                    'The product listings are efficiently managed using MongoDB, and to facilitate secure and smooth payment processing, I integrated the Stripe API. Additionally, I implemented the GrindSend API to automatically send receipts upon successful transactions, enhancing user satisfaction.',
                ]),
                'skills' => json_encode([
                    'FullStack Development',
                    'ReactJs',
                    'Tailwind',
                    'Nodejs',
                    'StripeJs',
                    'SendGridAPI',
                    'MongoDb',
                ]),
                'image_url' => './photo/Projects/Ecommerce.PNG',
                'project_view_url' =>
                    'https://github.com/MikeHuynh33/Ecommerce_PaymentWithStripe',
                'project_live_url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SavingSeed',
                'description' => json_encode([
                    "SavingSeed is project, built using plain JavaScript, to help users grasp the concept of compound interest while saving for their first house down payment. It demonstrates how regular saving, with compound interest, can grow their savings over time. The tool uses user inputs like savings amount, interest rate, and time to provide a visual representation of the savings' growth. It's designed to make the journey towards homeownership more understandable and motivating.",
                    'Additionally, it calculates their Tax-Free Savings Account (TFSA) and Registered Retirement Savings Plan (RRSP) based on their age and income.This comprehensive feature offers valuable financial insights, aiding users in both immediate housing goals and long-term retirement planning, all within one user-friendly platform.',
                ]),
                'skills' => json_encode([
                    'Financial Education',
                    'Vanilla JS',
                    'Functional',
                    'Responsive',
                    'Web Design',
                ]),
                'image_url' => './photo/Projects/savingseed.PNG',
                'project_view_url' =>
                    'https://github.com/MikeHuynh33/SavingSeeds',
                'project_live_url' =>
                    'https://mikehuynh33.github.io/SavingSeeds/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('Project')->insert($Data);
    }
}
