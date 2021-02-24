<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Criar outros tipos de produtos...
        //$this->call(TipoProdutoSeeder::class);

        $tipo_produto = \App\Models\TipoProduto::factory()
            ->count(1)
            ->create([
                'name' => 'Produto de limpeza',
            ]);

        $tipo_produto = \App\Models\TipoProduto::factory()
            ->count(1)
            ->create([
                'name' => 'Alimentação',
            ]);


        //Criar outros produtos...
        //$this->call(ProdutoSeeder::class);

        $produto = \App\Models\Produto::factory()
            ->count(1)
            ->create([
                'name' => 'Sabão em Po',
                'quantity' => '2',
                'tipo_produto_id' => '1',
            ]);

        $produto = \App\Models\Produto::factory()
            ->count(1)
            ->create([
                'name' => 'Sabão Liquido',
                'quantity' => '5',
                'tipo_produto_id' => '1',
            ]);
    }
}
