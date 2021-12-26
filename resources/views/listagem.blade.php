@extends('app')

@section('content')
	<h1>Enderecos</h1>

	<a class="btn btn-success" href="{{route('adicionar')}}">Adicionar CEP</a> <br>

	@if(session('success'))
		<div class="alert alert-success" role="alert">
			{{session('success')}}
		</div>
	@endif

	@if(session('error'))
		<div class="alert alert-danger" role="alert">
			{{session('error')}}
		</div>
	@endif

	<table class="table">
		<thead>
			<tr>
			<th scope="col">ID</th>
			<th scope="col">CEP</th>
			<th scope="col">Logradouro</th>
			<th scope="col">Numero</th>
			<th scope="col">Bairro</th>
			<th scope="col">Cidade</th>
			<th scope="col">Estado</th>
			<th scope="col">Data Criacao</th>
			</tr>
		</thead>
		<tbody>
			@foreach($enderecos as $endereco)
				<tr>
					<td>{{$endereco->id}}</td>
					<td>{{$endereco->cep}}</td>
					<td>{{$endereco->logradouro}}</td>
					<td>{{$endereco->numero}}</td>
					<td>{{$endereco->bairro}}</td>
					<td>{{$endereco->cidade}}</td>
					<td>{{$endereco->estado}}</td>
					<td>{{$endereco->created_at}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection