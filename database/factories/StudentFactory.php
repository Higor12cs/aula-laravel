<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->firstName();

        return [
            'course_id' => rand(1,4),
            'name' => $name,
            'linkedin' => \Illuminate\Support\Str::slug($name),
            'github' => \Illuminate\Support\Str::slug($name),
        ];
    }
}
