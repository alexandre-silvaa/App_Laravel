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
}
