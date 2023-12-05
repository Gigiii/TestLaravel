<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Course;

class EnrolledCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'studentId' => function () {
                return Student::factory()->create()->id;
            },
            'courseId' => function () {
                return Course::factory()->create()->id;
            },
        ];
    }
}
