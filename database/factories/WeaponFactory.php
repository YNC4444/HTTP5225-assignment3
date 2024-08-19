<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weapon>
 */
class WeaponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => fake() -> unique() -> firstName(),
          'rarity' => fake()->numberBetween($min = 4, $max = 5),
          'class' => fake()->word(),
          'base_atk' => fake() -> randomFloat(1, 100, 999),
          '2nd_stat' => fake() -> word(),
          '2nd_stat_value_%' => fake() -> randomFloat(2, 10, 99),
          'description' => fake()->unique()->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
