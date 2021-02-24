<?php

namespace Database\Seeders;

use App\Models\TipoProduto;
use Illuminate\Database\Seeder;

class TipoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoProduto::factory()
            ->count(5)
            ->create();
    }
}
