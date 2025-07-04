<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoryTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Array di categorie comuni
        $categories = [
            'Web Development',
            'Mobile Development',
            'Data Science',
            'Machine Learning',
            'Cloud Computing',
            'Cybersecurity',
            'Game Development',
            'UI/UX Design',
            'DevOps',
            'Blockchain'
        ];

        // Genera 10 categorie usando solo faker
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->description = $faker->sentence(10);
            $newCategory->save();
        }

    }
}