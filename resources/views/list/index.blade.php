<?php use App\Http\Controllers\ListController;  
use App\Http\Controllers\EventController;?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Cachorros</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<h1 class="text-center top">Lista de Cachorros Cadastrados</h1>
	<div class="container-tabela">
		<div class="col-8 m-auto">
			<table class="table table-striped table-hover">
				<thead>
					<th scope="col">Nome</th>
					<th scope="col">Raça</th>
					<th scope="col">Idade</th>
				</thead>
				<tbody>
					@foreach($dog as $dogs)
					<tr>
						<td>{{$dogs->nome}}</td>
						<td>{{$dogs->raca}}</td>
						<td>{{$dogs->idade}} anos</td>
						<td>
							<a href="/events/edit/{{$dogs->id}}">
								<button class="btn btn-info edit-btn">Editar</button>
							</a>
							<a>
								<form action="/events/{{ $dogs->id}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger delete-btn">Deletar</button>
								</form>
							</a>
						</td>
					</tr>

					@endforeach
				</tbody>
			  
			</table>
		</div>	
	</div>
	<div class="retorna-menu"><a href="{{ url('/')}}">Menu Inicial</a></div>
</body>
</html>