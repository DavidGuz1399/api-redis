<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $random_id = User::all()->random()->id;
        return [
            'name' => $this->faker->name(),
            'source' => $this->faker->text(50),
            'owner' => $random_id,
            'created_by' => $random_id,
        ];
    }
}
