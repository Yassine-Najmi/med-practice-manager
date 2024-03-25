<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Time;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $futureDate = $this->faker->dateTimeBetween('now', '+30 days');
        return [
            'patient_id' => Patient::factory()->create()->id,
            'date' => $this->faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'time' => Time::inRandomOrder()->first()->time,
        ];
    }
}
