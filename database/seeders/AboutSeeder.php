<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Data = [
            [
                'nickname' => 'Mike Huynh',
                'fullname' => 'Duc Minh Huynh',
                'email' => 'minh160394@gmail.com',
                'homephone' => '(905)-624-2254',
                'moblie' => '(647) 624-9349',
                'address' => 'GTA, Ontario, Canada',
                'resumeUrl' => 'Resume.pdf',
                'profileUrl' =>
                    'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp',
                'listLinks' => json_encode([
                    'https://github.com/MikeHuynh33',
                    'https://www.linkedin.com/in/mike-huynh-79aa30267/',
                    'https://twitter.com/MINHHUY30286077',
                    'https://www.facebook.com/bhjngt.vbbvfgb',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('About')->insert($Data);
    }
}
