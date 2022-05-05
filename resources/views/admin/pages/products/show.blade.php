@extends('layouts.app')

@section('title', 'Detalhes')

@section('content')

	<div>
		<h1>Detalhes - {{ $product->name }}</h1>
		 
		<hr>

		<ul>
			<li><strong>Nome: </strong>{{ $product->name }}</li>
			<li><strong>Preço: </strong>{{ $product->price }}</li>
			<li><strong>Descrição: </strong>{{ $product->description }}</li>
		</ul>

		<hr>

		<form action="{{ route('products.destroy', $product->id) }}" method="post">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Deletar</button>
		</form>

		<hr>

		<a href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a>
	</div>

@endsection

