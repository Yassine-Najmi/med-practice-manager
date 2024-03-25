<?php

namespace Database\Factories;

use App\Models\Week;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Time>
 */
class TimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'week_id' => "5",
            'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
        ];
    }
}
