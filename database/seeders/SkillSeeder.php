<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'HTML',
        ]);

        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'CSS',
        ]);

        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'JavaScript',
        ]);

        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'Laravel',
        ]);

        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'Python',
        ]);

        Skill::Create([
            'skill_kategori_id' => '1',
            'skills' => 'PHP',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'Leadership',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'User Interface Design',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'Web Development',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'MS Excel/Office',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'Analysis',
        ]);

        Skill::Create([
            'skill_kategori_id' => '2',
            'skills' => 'English',
        ]);
    }
}
