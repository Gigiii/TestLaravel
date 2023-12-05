<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assignment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignmentAttachment>
 */
class AssignmentAttachmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "assignmentId"=> Assignment::factory()->create()->id,
            "fileLocation"=> $this->faker->url,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
