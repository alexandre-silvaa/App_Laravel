<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request; 
    }

    public function index()
    {
        //$teste = 123;
        //$teste2 = 321;
        $products = ['Cadeira', 'Estante', 'Mesa', 'Suporte p/ Notebook', 'Televisão'];

        return view ('admin.pages.products.index', compact('products'));

        //$products = ['Produto 01', 'Produto 02', 'Produto 03'];
        //return $products;
    }

    public function show($id)
    {
        //return "Exibindo o produto de id: {$id}";
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function edit($id)
    {
        //return "Editando o produto de id: {$id}";
    }


     public function store()
    {
        dd('Cadastrando Produto...');
    }

    public function update($id)
    {
        //return "Editando um novo produto";
    }

    public function delete($id)
    {
        //return "Excluindo um novo produto";
    }
}