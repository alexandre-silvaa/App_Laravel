@extends('layouts.app')

@section('title', 'Detalhes')

@section('content')

	<div class="ml-5">
		<h1>Detalhes - {{ $product->name }}</h1>
		 
		<hr>

		<ul>
			<li><strong>Nome: </strong>{{ $product->name }}</li>
			<li><strong>Preço: </strong>{{ $product->price }}</li>
			<li><strong>Descrição: </strong>{{ $product->description }}</li>
		</ul>
	</div>

	<a href="{{ route('products.index') }}" class="btn btn-primary ml-5">Voltar</a>


@endsection

