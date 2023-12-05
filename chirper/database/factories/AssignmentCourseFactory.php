<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assignment;
use App\Models\Course;


class AssignmentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assignmentId' => Assignment::factory()->create()->id,
            'courseId' => Course::factory()->create()->id,
        ];
    }
}
