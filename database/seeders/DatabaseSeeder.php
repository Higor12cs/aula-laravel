<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $courses = ['Sistemas', 'Publicidade', 'Direito', 'Administração'];

        foreach($courses as $course){
            Course::create([
                'name' => $course,
            ]);
        }
        
        Student::factory(20)->create();
    }
}
