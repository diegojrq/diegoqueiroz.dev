<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobHistorySkill;

class JobHistorySkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 5; $i++) { 

            $nSkills = random_int(1, 10);

            for ($j = 1; $j < $nSkills ; $j++) { 
                
                JobHistorySkill::create([
                    'job_history_id'        => $i,
                    'skill_id'              => $j,
                ]);
            }
        }
    }
}
