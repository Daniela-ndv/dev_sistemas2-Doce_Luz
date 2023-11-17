<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cartao;

class CartaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cartao::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tipo_id' => $this->faker->numberBetween(-10000, 10000),
            'nomeTitular' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'numeroCartao' => $this->faker->numberBetween(-10000, 10000),
            'dataValidade' => $this->faker->date(),
            'codigoSeguranca' => $this->faker->regexify('[A-Za-z0-9]{60}'),
        ];
    }
}
