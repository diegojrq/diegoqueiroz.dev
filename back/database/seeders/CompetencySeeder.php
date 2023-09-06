<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competency;
use App\Models\CompetencyTranslation;

class CompetencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competency = Competency::create();

        $competency->translations()->saveMany([
            new CompetencyTranslation([
                'locale' => 'en-us',
                'name' => 'Beginner',
                'description' => 'I have no professional experience in this skill.'
            ]),
            new CompetencyTranslation([
                'locale' => 'pt-br',
                'name' => 'Iniciante',
                'description' => 'Eu não tenho experiência profissional nessa habilidade.'
            ]),
        ]);

        $competency = Competency::create();

        $competency->translations()->saveMany([
            new CompetencyTranslation([
                'locale' => 'en-us',
                'name' => 'Experienced',
                'description' => 'I have used this skill professionally in a limited way.'
            ]),
            new CompetencyTranslation([
                'locale' => 'pt-br',
                'name' => 'Experiente',
                'description' => 'Eu usei essa habilidade profissionalmente, mas de forma limitada.'
            ]),
        ]);

        $competency = Competency::create();

        $competency->translations()->saveMany([
            new CompetencyTranslation([
                'locale' => 'en-us',
                'name' => 'Advanced',
                'description' => 'I have used this skill professionally at least once a week.'
            ]),
            new CompetencyTranslation([
                'locale' => 'pt-br',
                'name' => 'Avançado',
                'description' => 'Eu usei essa habilidade profissionalmente por pelo menos uma vez por semana.'
            ]),
        ]);

        $competency = Competency::create();

        $competency->translations()->saveMany([
            new CompetencyTranslation([
                'locale' => 'en-us',
                'name' => 'Expert',
                'description' => 'I have used this skill professionally on a daily basis.'
            ]),
            new CompetencyTranslation([
                'locale' => 'pt-br',
                'name' => 'Expert',
                'description' => 'Eu usei essa habilidade profissionalmente diariamente.'
            ]),
        ]);
    }
}
