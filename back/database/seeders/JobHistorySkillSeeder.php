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
        for ($i=0; $i < 10; $i++) { 
            JobHistorySkill::create([
                'job_history_id'        => 1,
                'skill_id'              => $i + 1,
            ]);
        }
    }
}
