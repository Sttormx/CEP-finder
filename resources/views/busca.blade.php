@extends('app')

@section('content')
	<h1 class="mb-5">BUSCAR CEP</h1>
	<form action="{{route('buscar')}}" method="GET">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="cep" placeholder="CEP" aria-label="CEP" aria-describedby="basic-addon1">
		</div>
		<button type="submit" class="btn btn-success">Procurar</button>
	</form>
@endsection