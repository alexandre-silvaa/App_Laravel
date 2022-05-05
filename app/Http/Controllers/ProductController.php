<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;

class ProductController extends Controller
{
    protected $request;
    private $repository;
    
    public function __construct(Request $request, Product $product)
    {
        $this->request = $request; 
        $this->repository = $product;
    }

    public function index()
    {
        $products = $this->repository->paginate();

        return view ('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    public function show($id)
    {

        if(!$product = $this->repository->find($id))
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
        $this->repository->create($data);

        return redirect()->route('products.index');
    }

    public function update($id)
    {
        dd('Editando Produto {$id}...');    
    }

    public function destroy($id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();

        $product->delete();

        return redirect()->route('products.index');

    }
}