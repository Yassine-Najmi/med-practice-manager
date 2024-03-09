<?php

namespace Database\Factories;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fournisseur_id' => function () {
                return Fournisseur::factory()->create()->id;
            },
            'name' => fake()->name(),
            'quantity' => fake()->numberBetween(0, 100),
            'price' => $this->faker->randomFloat(2, 0.1, 1000),
            'category' => $this->faker->word,
        ];
    }
}
