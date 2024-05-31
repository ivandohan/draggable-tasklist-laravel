<?php

namespace Database\Seeders;

// Suggested code may be subject to a license. Learn more: ~LicenseLog:2619561737.
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 3; $i++){
            Project::Create([
                'name' => "Project $i"
            ]);
        }
    }
}
