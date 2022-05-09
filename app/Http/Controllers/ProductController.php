<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $request;
    private $repository;
    
    public function __construct(Request $request, Product $product)
    {
        $this->request = $request; 
        $this->repository = $product;
    }


    //Página Inicial - Lista os produtos
    public function index()
    {
        $products = $this->repository->orderBy('name')->paginate();

        return view ('admin.pages.products.index', [
            'products' => $products
        ]);
    }

    //Mostra os detalhes de um produto
    public function show($id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.products.show', [
            'product' => $product
        ]);
    }

    //Retorna a view de criação de produtos
    public function create()
    {
        return view('admin.pages.products.create');
    }

    //Retorna a view de edição de produtos
    public function edit($id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();

        return view('admin.pages.products.edit', compact('product'));
    }


    //Função de criação de produtos
    public function store(StoreUpdateProductRequest $request)
    {

        $data = $request->only('name', 'description', 'price', 'image');

        if($request->hasFile('image') && $request->image->isValid()){
            $imagePath = $request->image->store('products');

            $data['image'] = $imagePath;
        }

        $this->repository->create($data);

        return redirect()->route('products.index');
    }

    //Função de edição de produtos
    public function update(StoreUpdateProductRequest $request, $id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();

        $data = $request->all();

        if($request->hasFile('image') && $request->image->isValid()){

            if($product->image && Storage::exists($product->image)){
                Storage::delete($product->image);
            }

            $imagePath = $request->image->store('products');
            $data['image'] = $imagePath;
        }


        $product->update($data);  
        
        return redirect()->route('products.index');
    }


    //Função de exclusão de produtos
    public function destroy($id)
    {
        if(!$product = $this->repository->find($id))
            return redirect()->back();

        if($product->image && Storage::exists($product->image)){
                Storage::delete($product->image);
            }

        $product->delete();

        return redirect()->route('products.index');

    }

    // Search Products
    public function search(Request $request)
    {
        $filter = $request->except('_token');

        $products = $this->repository->search($request->filter);

        return view ('admin.pages.products.index', [
            'products' => $products,
            'filters'   => $filter
        ]);
    }
}