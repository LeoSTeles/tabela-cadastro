<?php use App\Http\Controllers\AddController;    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edição Cachorro</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<h1 class="text-center top">Editar Cachorro</h1>
	<div class="retorna-menu"><a href="{{ url('/')}}">Menu Inicial</a></div>
	<div class="container text-center">
		<div class="container-cachorro">
			<section class="salvar-cachorro">
				<div>
					<label>Editar cachorro cadastrado</label>
				</div>
				<img src="{{url('assets/images/dog-icon.png')}}">
				<form action="/events/update/{{$event->id}}" method="POST">
					@csrf
					{{ method_field('PUT') }}
					<div>
						<label>Nome do cachorro</label>
					</div>
					<div>
						<input type="text" name="nome" value="{{$event->nome}}" required>
						<br>
					</div>
					<div>
						<label>Selecione a raça</label>
					</div>
						<select name="raca">
								<option value="{{$event->raca}}">{{$event->raca}}</option>
								@foreach ($racas as $item)
									<option value="{{$item->nome_raca}}">{{$item->nome_raca}}</option>
								@endforeach
						</select>
					<div>
						<label>Idade do cachorro</label>
					</div>
					<div>
						<input type="text" name="idade" value="{{$event->idade}}" required>
						<br>
					</div>
					<div>
						<input type="submit" value="Salvar alterações">
					</div>
				</form>
			</section>
		</div>
	</div>
</body>
</html>