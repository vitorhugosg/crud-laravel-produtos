@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<h1>Página de detalhe</h1>
			<h2>Nome do produto:</h2>
			<p>{{ $detailpage->nome }}</p>
			<hr>
			<h4>Descrição do produto:</h4>
			<p>
				{{ $detailpage->descricao }}
			</p>
			<a href="/produtos">Voltar</a>
		</div>
	</div>
</div>


@endsection