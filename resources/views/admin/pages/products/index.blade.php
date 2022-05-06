@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	{{-- @include('admin.includes.alerts', ['content' => 'Alerta de preços dos produtos']) --}}

	<div class="ml-5">
		<h1>Exibindo os produtos</h1>
		<a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar Novo Produto</a>
	</div>

	<hr>

	<form action="{{ route('products.search') }}" class="form form-inline m-3" method="post">
		@csrf
		<div>
			<input type="text" name="filter" placeholder="Filtrar" class="form-control" value="{{ $filters['filter'] ?? '' }}">
			<button class="btn btn-success">
				<i class="bi bi-search"></i>
			</button>
		</div>
			
	</form>

	<div class="container">
		<table class="table table-striped table-hover"> 
			<thead>
				<tr>
					<th width=50% >Nome</th>
					<th width=30% >Preço</th>
					<th colspan="2">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->name }}</td>
						<td>{{ $product->price }}</td>
						<td>
							<a href="{{ route('products.show', $product->id) }}" class="btn btn-primary bi bi-three-dots"> Detalhes</a>

							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-success bi bi-pencil-square"> Editar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		@if (isset($filters))
			{!! $products->appends($filters)->links() !!}
		@else
			{!! $products->links() !!}
		@endif
		
	</div>

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


