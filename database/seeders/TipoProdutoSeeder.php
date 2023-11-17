<?php

namespace Database\Seeders;

use App\Models\TipoProduto;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TipoProduto::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('tipo_produtos')->insert(
                [
                    'nome' => $fake->word,
                ]
            );
        }
    }
}
