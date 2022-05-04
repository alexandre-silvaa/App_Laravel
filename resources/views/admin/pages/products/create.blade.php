@extends('layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')

    <div class="p-5">

        <h4>Cadastrar novo produto</h4>

        <hr>

        @include('admin.includes.alerts')

        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">  
           @csrf

            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="description" placeholder="Descrição" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="price" placeholder="Preço" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                     <input type="file" class="form-control" name="image" >
                </div>
            </div>
            <button class="btn btn-sm btn-success" type="submit">Enviar</button>
        </form>
    </div>
    
@endsection