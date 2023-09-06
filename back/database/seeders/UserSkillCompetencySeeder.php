<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserSkillCompetency;

class UserSkillCompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            UserSkillCompetency::create([
                'user_id'               => 1,
                'skill_id'              => random_int(1, 26),
                'competency_id'         => random_int(1, 4),
                'years_of_experience'   => random_int(1, 10),
            ]);
        }
    }
}
