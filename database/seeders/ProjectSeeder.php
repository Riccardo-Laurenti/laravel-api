<?php

namespace Database\Seeders;

use Faker\Generator;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 50; $i++) {
            $project = new Project();
            $project->title = $faker->text(20);
            $project->content = $faker->paragraph(15, true);
            $project->image = $faker->imageUrl(250, 250);
            $project->save();
        }
    }
}
