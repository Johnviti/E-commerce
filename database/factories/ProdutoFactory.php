<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->word,
            'descricao' => $this->faker->word,
            'unidade' => $this->faker->word,
            'peso' => $this->faker->randomFloat(2, 0, 99999999999999999999.99),
            'preco' => $this->faker->randomFloat(2, 0, 99999999999999999999.99),
            'id_categoria_produto' => $this->faker->randomNumber(),
        ];
    }
}
