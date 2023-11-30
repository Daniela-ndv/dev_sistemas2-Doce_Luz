<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Produto::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('produtos')->insert(
                [
                    'nome' => $fake->word,
                    'tipo_id' => $fake->numberBetween($min = 1, $max = 5),
                    'codigo' => $fake->randomNumber($nbDigits = NULL, $strict = false),
                    'valorCusto' => $fake->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000),
                    'valorVenda' => $fake->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000),
                    'descricao' => $fake->sentence($nbWords = 5, $variableNbWords = true),
                    'imagem'=> $fake->image( $dir = 'storage\app\public\imagem\produto',640,480, null, true),   
            ]);
        }
    }
}
