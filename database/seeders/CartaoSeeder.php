<?php

namespace Database\Seeders;

use App\Models\Cartao;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CartaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Cartao::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('cartaos')->insert(
                [
                    'nomeTitular' => $fake->name,
                    'tipo_id' => $fake->numberBetween($min = 1, $max = 2),
                    'usuario_id' => $fake->numberBetween($min = 1, $max = 5),
                    'numeroCartao' => $fake->randomNumber($nbDigits = NULL, $strict = false), 
                    'dataValidade' => $fake->date($format = 'Y-m-d', $min = 'now'),
                    'codigoSeguranca' => $fake->randomNumber($nbDigits = NULL, $strict = false),
                    'imagem'=> $fake->image( $dir = 'storage/app/public/imagem/cartao',640,480, null, true),
                ]
            );
        }
    }
}
