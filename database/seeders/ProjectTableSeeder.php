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
        for ($i = 0; $i < 3; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->word();
            $newProject->description = $faker->sentence();
            $newProject->url = $faker->url();
            $newProject->save();

        }
    }
}
