@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	<h1>Exibindo os produtos</h1>

	@if (isset($products))
		@foreach ($products as $product)
			<p class="@if ($loop->last) last @endif"> {{ $product }} </p>
		@endforeach
	@endif

	<hr>

	@forelse ($products as $product)
		<p class="@if ($loop->first) last @endif"> {{ $product }} </p>	
	@empty
		<p>Não existem produtos cadastrados.</p>
	@endforelse

	<hr>

@endsection 

<style>

	.last{
		background-color: #bbbbbb; 
	}

</style>

