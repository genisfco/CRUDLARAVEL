<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = [
            ['id' => 1, 'nome' => 'Mouse', 'preco' => 10.99],
            ['id' => 2, 'nome' => 'Teclado', 'preco' => 20.99],
            ['id' => 3, 'nome' => 'Head-set', 'preco' => 30.99],
        ];

        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('produtos.show', 1);
    }

    public function show($id)
    {
        $produto = ['id' => 1, 'nome' => 'Produto 1', 'preco' => 10.99];

        return view('produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = ['id' => 1, 'nome' => 'Produto 1', 'preco' => 10.99];

        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('produtos.show', $id);
    }

    public function destroy($id)
    {
        return redirect()->route('produtos.index');
    }
}
