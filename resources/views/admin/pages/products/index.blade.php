@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	{{-- @include('admin.includes.alerts', ['content' => 'Alerta de preços dos produtos']) --}}

	<h1 class="ml-5">Exibindo os produtos</h1>

	<a href="{{ route('products.create') }}" class="ml-5">Cadastrar Novo Produto</a>

	<hr>

	<table class="ml-5"> 
		<thead>
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a href="">Detalhes</a>
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


