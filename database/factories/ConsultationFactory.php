<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'situation' => $this->faker->sentence(),
            'antécédents' => $this->faker->paragraph(),
            'motif' => $this->faker->randomFloat(2, 0, 1000),
            'examen_clinick' => $this->faker->paragraph(),
            'examen_biologique' => $this->faker->paragraph(),
            'examen_radiologique' => $this->faker->paragraph(),
            'diagnostique' => $this->faker->sentence(),
            'traitment' => $this->faker->paragraph(),
        ];
    }
}
