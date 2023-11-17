<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Produto;

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
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'tipo_id' => $this->faker->numberBetween(-10000, 10000),
            'codigo' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'valorCusto' => $this->faker->randomFloat(2, 0, 9999.99),
            'valorVenda' => $this->faker->randomFloat(2, 0, 9999.99),
            'descricao' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'imagem' => $this->faker->regexify('[A-Za-z0-9]{200}'),
        ];
    }
}
