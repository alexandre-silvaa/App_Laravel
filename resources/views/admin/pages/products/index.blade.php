@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	@include('admin.includes.alerts', ['content' => 'Alerta de preços dos produtos'])

	<hr>

	@component('admin.components.card')
		@slot('title')
			<h4>Lorem Ipsum</h4>
		@endslot
		Um card de Exemplo!
	@endcomponent

	<hr>

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

@push('styles')
	<style>
		.last{
			background-color: #bbbbbb; 
		}
	</style>
@endpush

@push('scripts')
	<script>
		document.body.style.backgroundColor = '#EDFEFD';
	</script>
@endpush


