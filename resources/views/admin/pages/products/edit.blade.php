@extends('layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h4>Editar produto {{ $id }} </h4>

    <form action="{{ route('products.update', $id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <button class="btn btn-sm btn-success" type="submit">Enviar</button>
    </form>
@endsection