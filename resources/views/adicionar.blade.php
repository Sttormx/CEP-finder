@extends('app')

@section('content')
	<h1 class="mb-5">SALVAR CEP</h1>

	@if ($errors->any())
		<div class="alert alert-damage">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{route('salvar')}}" method="POST">
		@csrf
		<div class="form-group">
			<input type="text" class="form-control" name="cep" placeholder="CEP" aria-label="CEP" aria-describedby="basic-addon1" value="{{$cep}}">
		</div> <br>

		<div class="form-group">
			<input type="text" class="form-control" name="logradouro" placeholder="LOGRADOURO" aria-label="LOGRADOURO" aria-describedby="basic-addon1" value="{{$logradouro}}">
		</div> <br>

		<div class="form-group">
			<input type="text" class="form-control" name="numero" placeholder="NUMERO" aria-label="NUMERO" aria-describedby="basic-addon1">
		</div> <br>

		<div class="form-group">
			<input type="text" class="form-control" name="bairro" placeholder="BAIRRO" aria-label="BAIRRO" aria-describedby="basic-addon1" value="{{$bairro}}">
		</div> <br>

		<div class="form-group">
			<input type="text" class="form-control" name="cidade" placeholder="CIDADE" aria-label="CIDADE" aria-describedby="basic-addon1" value="{{$cidade}}">
		</div> <br>
		
		<div class="form-group">
			<input type="text" class="form-control" name="estado" placeholder="ESTADO" aria-label="ESTADO" aria-describedby="basic-addon1" value="{{$estado}}">
		</div> <br>
		<button type="submit" class="btn btn-success">Salvar</button>
	</form>
@endsection