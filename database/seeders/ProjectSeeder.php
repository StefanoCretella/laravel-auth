<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Progetto 1',
            'description' => 'Descrizione del progetto 1',
            'image' => 'path/to/image1.jpg'
        ]);

        Project::create([
            'title' => 'Progetto 2',
            'description' => 'Descrizione del progetto 2',
            'image' => 'path/to/image2.jpg'
        ]);
    }
}
