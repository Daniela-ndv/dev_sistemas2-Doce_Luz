<?php

namespace Database\Seeders;

use App\Models\FormaPagamentoTipoCartao;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FormaPagamentoTipoCartaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //FormaPagamentoTipoCartao::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 2) as $index) {
            DB::table('forma_pagamento_tipo_cartaos')->insert(
                [
                    'nome'=>$fake->randomElement($array = array ('Crédito','Débito')), 
                ]
            );
        }
    }
}
