<?php

namespace Database\Seeders;
use App\Models\Project;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Genera 8 progetti usando solo faker
        for ($i = 0; $i < 8; $i++) {
            // Genera una descrizione più lunga e dettagliata
            $description = $faker->paragraph(4) . ' ' .
                $faker->paragraph(3) . ' ' .
                'Include funzionalità avanzate e integrazione con servizi esterni per ottimizzare le performance e l\'esperienza utente. ' .
                $faker->paragraph(2);

            $project = Project::create([
                'name' => $faker->catchPhrase(),
                'description' => $description,
                'url' => $faker->url(),
            ]);

            // Associa da 1 a 3 categorie casuali a ogni progetto
            $categories = Category::inRandomOrder()->take($faker->numberBetween(1, 3))->get();
            $project->categories()->attach($categories);
        }
    }
}
