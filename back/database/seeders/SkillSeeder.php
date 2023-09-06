<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skillArray = [
            'PHP',
            'Laravel',
            'Vue.js',
            'Node.js',
            'Angular',
            'Angular.js',
            'Symfony',
            'Scrum',
            'Agile',
            'Html',
            'Css',
            'Javascript',
            'MySQL',
            'PostgreSQL',
            'SQL Server',
            'Git',
            'Java',
            'Jenkins',
            'Docker',
            'C#',
            '.NET',
            'Visual Studio',
            'Delphi',
            'React.js',
            'Ruby',
            'Rails',
        ];

        foreach ($skillArray as $skill) {
            Skill::create([
                'name' => $skill,
            ]);
        }
    }
}
