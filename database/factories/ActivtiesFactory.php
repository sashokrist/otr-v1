<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activities>
 */
class ActivtiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->randomElement(['Basic', 'Psychology', 'Self esteem', 'Disabilities']),
            'date' => $this->faker->date,
            'status' => $this->faker->randomElement(['Idle', 'Active', 'Closed']),
            'sessions' => $this->faker->randomDigit(1, 60),
            'admin' => $this->faker->name
        ];
    }
}
