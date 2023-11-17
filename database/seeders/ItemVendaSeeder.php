<?php

namespace Database\Seeders;

use App\Models\ItemVenda;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemVendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ItemVenda::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('item_vendas')->insert(
                [
                    'pedido_id' => $fake->numberBetween($min = 1, $max = 5),
                    'produto_id' => $fake->numberBetween($min = 1, $max = 5),
                    'quantidade' => $fake->numberBetween($min = 1, $max = 10000),
                ]
            );
        }
    }
}
