<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{

    public function index()
    {
        return produto::all();
    }

    public function store(Request $request)
    {
        produto::create($request->all());
    }

    public function show(produto $produto)
    {
        return produto::findOrfail($id);
    }

    public function update(Request $request, produto $produto)
    {
        $produto = produto::findOrfail($id);
        $produto->update($request0->all());
    }

    public function destroy(produto $produto)
    {
        $produto = produto::findOrfail($id);
        $produto->delete();
    }
}
