<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Produto;

use App\Models\TipoProduto;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function ListagemProdutosTest()
    {
        $produtos = Produto::factory()
            ->count(5)
            ->create();

    }
}
