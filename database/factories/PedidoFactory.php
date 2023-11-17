<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pedido;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'usuario_id' => $this->faker->numberBetween(-10000, 10000),
            'forma_pagamento_id' => $this->faker->numberBetween(-10000, 10000),
            'cartao_id' => $this->faker->numberBetween(-10000, 10000),
            'status_id' => $this->faker->numberBetween(-10000, 10000),
            'observacao' => $this->faker->regexify('[A-Za-z0-9]{200}'),
        ];
    }
}
