<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ano = fake()->year();

        return [
            "modelo" => fake()->sentence(),
            "fabricante" => fake()->company(),
            "ano_modelo" => $ano,
            "ano_fabricacao" => $ano,
            "disponivel_em" => fake()->dateTimeBetween('now', '+1 week')
        ];
    }
}
