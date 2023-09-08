<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobHistory;
use App\Models\JobHistoryTranslation;

class JobHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 4; $i++) { 

            $competency = JobHistory::create([
                'user_id'       => 1,
                'company_name'  => fake()->company(),
                'local'         => 'São Paulo',
                'start_date'    => fake()->date(),
                'end_date'      => fake()->date(),
            ]);
    
            $competency->translations()->saveMany([
                new JobHistoryTranslation([
                    'locale'            => 'en-us',
                    'job_title'         => fake()->jobTitle(),
                    'job_description'   => fake()->sentence($nbWords = random_int(25, 100), $variableNbWords = true)
                ]),
                new JobHistoryTranslation([
                    'locale'            => 'pt-br',
                    'job_title'         => fake()->jobTitle(),
                    'job_description'   => fake()->sentence($nbWords = random_int(25, 100), $variableNbWords = true)
                ]),
            ]);
            # code...
        }


    }
}
