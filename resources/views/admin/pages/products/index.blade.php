@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	{{-- @include('admin.includes.alerts', ['content' => 'Alerta de preços dos produtos']) --}}

	<div class="ml-5">
		<h1>Exibindo os produtos</h1>
		<a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar Novo Produto</a>
	</div>

	<hr>

	<table class="table table-striped"> 
		<thead>
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th width="100">Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a href="{{ route('products.show', $product->id) }}">Detalhes</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $products->links() !!}

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


