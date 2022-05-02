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
        return view('admin.pages.products.edit', compact('id'));
    }


     public function store(Request $request)
    {
        // dd('Cadastrando Produto...');
        // dd($request->all());
        // dd($request->only(['name', 'description']));
        //dd($request->input('teste', 'default'));
        dd($request->except('_token'));
    }

    public function update($id)
    {
        dd('Editando Produto {$id}...');    
    }

    public function delete($id)
    {
        //return "Excluindo um novo produto";
    }
}