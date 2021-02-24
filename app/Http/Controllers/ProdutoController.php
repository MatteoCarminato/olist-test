<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Models\Produto;
use App\Http\Resources\Produto as ProdutoResource;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $produtos = Produto::all();
        return $this->sendResponse(ProdutoResource::collection($produtos), 'Lista de Produtos.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\ProdutoStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProdutoStoreRequest $request)
    {
        $produto = new Produto();
        $produto->name = $request->name;
        $produto->quantity = $request->quantity;
        $produto->tipo_produto_id = $request->tipo_produto_id;
        $produto->save();

        return $this->sendResponse(new ProdutoResource($produto), 'Produto Cadastrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Produto $produto)
    {
        return $this->sendResponse(new ProdutoResource($produto), 'Listagem do produto selecionado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\ProdutoUpdateRequest $request
     * @param \App\Models\Produto $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProdutoUpdateRequest $request, Produto $produto)
    {
        $produto->update($request->only(['name','quantity','tipo_produto_id']));

        return $this->sendResponse(new ProdutoResource($produto), 'Produto Atualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return $this->sendResponse(new ProdutoResource($produto), 'Produto Deletado.');
    }
}
