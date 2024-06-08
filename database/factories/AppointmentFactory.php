<?php

namespace Database\Factories;

use App\Models\BusinessHour;
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
        $futureDate = $this->faker->dateTimeBetween('2 days', '3 days', 'Africa/Morocco');
        return [
            'patient_id' => Patient::factory()->create()->id,
            'date' => $futureDate->format('Y-m-d'),
            'time' =>  $this->faker->randomElement(BusinessHour::inRandomOrder()->first()->TimesPeriod) ?? '10:00:00',
        ];
    }
}
