<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Array di tecnologie comuni
        $technologies = [
            'Laravel',
            'PHP',
            'JavaScript',
            'React',
            'Vue.js',
            'Node.js',
            'Bootstrap',
            'Tailwind CSS',
            'MySQL',
            'PostgreSQL',
            'MongoDB',
            'Docker',
            'Git',
            'HTML5',
            'CSS3',
            'SASS',
            'TypeScript',
            'jQuery'
        ];

        // Genera 8 progetti usando solo faker
        for ($i = 0; $i < 8; $i++) {
            $randomTech = $faker->randomElements($technologies, $faker->numberBetween(3, 6));

            // Genera una descrizione più lunga e dettagliata
            $description = $faker->paragraph(4) . ' ' .
                $faker->paragraph(3) . ' ' .
                'Include funzionalità avanzate di ' . implode(', ', array_slice($randomTech, 0, 2)) .
                ' e integrazione con servizi esterni per ottimizzare le performance e l\'esperienza utente. ' .
                $faker->paragraph(2);

            Project::create([
                'name' => $faker->catchPhrase(),
                'description' => $description,
                'url' => $faker->url(),
                'tech' => $randomTech
            ]);
        }
    }
}
