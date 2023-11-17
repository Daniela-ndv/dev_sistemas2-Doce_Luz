<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('users')->insert(
                ['name'=>$fake->name,
                 'email'=>$fake->email,
                 'password'=>$fake->password,
                ] 
            );
        }
    }
}
