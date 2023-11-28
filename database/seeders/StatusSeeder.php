<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Status::factory()->count(5)->create();
        $fake = Faker::create("pt_BR");
        foreach (\range(1, 5) as $index) {
            DB::table('statuses')->insert(
                [
                    'nome'=>$fake->randomElement($array = array (
                        'Confirmado','Em processamento','A caminho','Entregue')),
                ]
            );
        }
    }
}
