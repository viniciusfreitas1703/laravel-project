<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    public function index()
    {
        return cliente::all();
    }

    public function store(Request $request)
    {
        cliente::create($request->all());
    }

    public function show(cliente $cliente)
    {
        return cliente::findOrfail($id);
    }

    public function update(Request $request, cliente $cliente)
    {
        $cliente = cliente::findOrfail($id);
        $cliente->update($request0->all());
    }

    public function destroy(cliente $cliente)
    {
        $cliente = cliente::findOrfail($id);
        $cliente->delete();
    }
}
