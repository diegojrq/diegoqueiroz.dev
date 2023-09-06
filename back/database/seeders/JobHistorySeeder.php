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
        $competency = JobHistory::create([
            'user_id'       => 1,
            'company_name'  => 'Casa do Código',
            'local'         => 'São Paulo',
            'start_date'    => '2012-01-01',
            'end_date'      => '2013-01-01',
        ]);

        $competency->translations()->saveMany([
            new JobHistoryTranslation([
                'locale'            => 'en-us',
                'job_title'         => 'Developer',
                'job_description'   => 'Very gude professional.'
            ]),
            new JobHistoryTranslation([
                'locale'            => 'pt-br',
                'job_title'         => 'Desenvovledor',
                'job_description'   => 'Bom home.'
            ]),
        ]);

    }
}
