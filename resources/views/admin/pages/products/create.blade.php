@extends('layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h4>Cadastrar novo produto</h4>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <input type="file" name="photo">
        <button class="btn btn-sm btn-success" type="submit">Enviar</button>
    </form>
@endsection