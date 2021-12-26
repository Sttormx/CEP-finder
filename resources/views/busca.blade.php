<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>CEP Finder</title>
  </head>
  <body>
	<div class="container">
		<h1 class="mb-5">BUSCAR CEP</h1>
		<form action="{{route('buscar')}}" method="GET">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="cep" placeholder="CEP" aria-label="CEP" aria-describedby="basic-addon1">
			</div>
			<button type="submit" class="btn btn-success">Procurar</button>
		</form>
	</div>
  </body>
</html>