<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name' => fake()->unique()->firstName(),
          'rarity' => fake()->numberBetween($min = 4, $max = 5),
          'element' => fake()->word(),
          'weapon_class' => fake()->word(),
          'description' => fake()->unique()->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
