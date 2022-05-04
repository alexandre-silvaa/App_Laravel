<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request; 
    }

    public function index()
    {
        $products = Product::paginate();

        return view ('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {

        if(!$product = Product::find($id))
            return redirect()->back();


        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }


     public function store(StoreUpdateProductRequest $request)
    {

        $data = $request->only('name', 'description', 'price');

        Product::create($data);
    
        return redirect()->route('products.index');
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