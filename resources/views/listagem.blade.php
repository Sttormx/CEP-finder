<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<title>CEP Finder</title>
</head>
<body>
	<div class="container">
		<h1>Enderecos</h1>

		<a class="btn btn-success" href="{{route('adicionar')}}">Adicionar CEP</a>

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
	</div>
</body>
</html>