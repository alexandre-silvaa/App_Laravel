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

        dd("Ok");
        /*$request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image'
        ]);*/

        //dd('Ok');

        // dd('Cadastrando Produto...');
        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->input('teste', 'default'));
        // dd($request->except('_token'));

        if($request->file('photo')->isValid()){
            //dd($request->photo->extension());
            //Salva arquivo
            //dd($request->file('photo')->store('products'));


            //Salva arquivo com nome personalizado
            $nameFile = $request->name . '.'. $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));
        }
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