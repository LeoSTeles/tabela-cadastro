<!DOCTYPE html>
<html>
<head>
	<title>Menu de Seleção</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/bootstrap/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<h1 class="text-center top">Selecione a opção desejada</h1>

	<section class="container-option left w33">
		<a href="{{ url('add/')}}"><img src="assets/images/add.png"></a>
	</section>
	<section class="container-option right w33">
		<a href="{{ url('list/')}}"><img src="assets/images/list.png"></a>
	</section>
	<div class="clear"></div>
</body>
</html>