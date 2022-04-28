<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = ['Produto 01', 'Produto 02', 'Produto 03'];


        return $products;
    }

    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }

    public function create()
    {
        return "Exibindo o form de cadastro de um novo produto";
    }

    public function edit($id)
    {
        return "Editando o produto de id: {$id}";
    }


     public function store()
    {
        return "Cadastrando de um novo produto";
    }

    public function update($id)
    {
        return "Editando um novo produto";
    }

    public function delete($id)
    {
        return "Excluindo um novo produto;
    }
}