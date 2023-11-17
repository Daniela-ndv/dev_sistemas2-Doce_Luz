<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ItemVenda;

class ItemVendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemVenda::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'pedido_id' => $this->faker->numberBetween(-10000, 10000),
            'produto_id' => $this->faker->numberBetween(-10000, 10000),
            'quantidade' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
