<!DOCTYPE html>
<html>
<head>
	<title>Limbs | Atomic Lab</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo01.css">
	<link rel="stylesheet" type="text/css" href="css/estilo02.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
	<script src="js/jquery-3.2.1.js"></script>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico' />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
	<div id="main_head">
		<a href="index.php"><img id="logo_head" src="img/limbs_white.svg"></a>
		<nav>
			<li><a onclick='cerrarmenu()' href="home.php">Inicio</a></li>
			<li><a onclick='cerrarmenu()' href="pedir_una_mano.php">Pedir una mano</a></li>
			<li><a onclick='cerrarmenu()' href="http://www.limbs.earth/" target="_blank">¿Qué es Limbs?</a></li>
		</nav>
		<img src="img/menu.svg" id="menu_mobil" onclick="abrirmenu()">
	</div>
	<div id="menu_perfil">
		<div id="icono_perfil"></div>
		<ul id="opciones_perfil">
			<li class="perfil_name">Test User</li>
			<li class="cerrar_sesion">Cerrar sesión</li>
		</ul>
	</div>
</header>
<div id="cont" class="min_full">