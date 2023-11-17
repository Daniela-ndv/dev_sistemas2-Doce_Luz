<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\FormaPagamentoTipoCartao;

class FormaPagamentoTipoCartaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FormaPagamentoTipoCartao::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->regexify('[A-Za-z0-9]{60}'),
        ];
    }
}
