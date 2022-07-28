<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Pizza de mussarela',
            'preco'=>'35',
            'foto'=>'data:image/jpeg;base64,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',
            'situacao'=>'habilitado',

        ]);
    }
}