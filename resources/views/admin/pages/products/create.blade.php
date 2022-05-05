@extends('layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')

    <div class="p-5">

        <h4>Cadastrar novo produto</h4>

        <hr>

        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">  
           @include('admin.pages.products._partials.forms')
        </form>
    </div>
    
@endsection