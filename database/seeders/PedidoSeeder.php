<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pedido::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('pedidos')->insert(
                [
                    'usuario_id' => $fake->numberBetween($min = 1, $max = 5),
                    'forma_pagamento_id' => $fake->numberBetween($min = 1, $max = 5),
                    'cartao_id' => $fake->numberBetween($min = 1, $max = 5),
                    'status_id' => $fake->numberBetween($min = 1, $max = 5),
                    'observacao' => $fake->sentence($nbWords = 5, $variableNbWords = true),
                ]
            );
        }
    }
}
