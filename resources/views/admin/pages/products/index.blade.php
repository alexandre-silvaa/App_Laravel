@extends('layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

	<h1>Exibindo os produtos</h1>

	@if ($teste === '123')
		É igual
	@else 
		É diferente	
	@endif

	@isset($teste2)
		<p>{{ $teste2 }}</p>
	@endisset

	@auth
		<p>Autenticado com Sucesso!!!</p>
	@endauth

	@switch($teste)
		@case(1)
			Igual a 1
			@break
		@case(2)
			Igual a 2
		@case(3)
			Igual a 3
		@case(123)
			Igual a 123
			@break
		@default
			Pdrão
	@endswitch

@endsection 

