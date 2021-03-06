<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'quantity' => $this->faker->randomNumber,
            'tipo_produto_id' => \App\Models\TipoProduto::factory(),
        ];
    }
}
