<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::Create([
            'fullname' => 'Teuku M. Arief Afwan',
            'nickname' => 'Afwan',
            'desc' => "Hi!, I'm Afwan, 23 years old and a fresh graduate with a degree in engineering, majoring in information systems. I like to learn many things, especially programming, I master the PHP Framework Laravel programming language, Javascript, as well as HTML & CSS markup. Thank You!",
            'work_as' => 'Web Developer &middot; Designer &middot; Data Engginer',
            'about' => 'Fullstack Web Developer. Laravel Enthusiast. Since 2019',
            'cv' => 'cv.pdf'
        ]);
    }
}
