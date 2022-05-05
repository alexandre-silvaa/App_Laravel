@extends('layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h4>Editar produto {{ $product->name }} </h4>

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @method('PUT')
        @include('admin.pages.products._partials.forms')
    </form>
@endsection