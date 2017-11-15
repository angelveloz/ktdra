<?php
	
	wp_enqueue_style( 'style_css', getTema()."/style.css", array(), "1.0.0" );
	wp_enqueue_style( 'generales_css', getTema()."/css/globales.css", array(), "1.0.0" );

	$HTML = '
		<!doctype html>
		<html lang="es-ES">
			<head>
				<title>K-T-DRA</title>
				<link href="http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic|Oswald:400,300,700" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="'.getTema().'/css/font-awesome.min.css">

				<link rel="icon" href="'.getTema().'/img/logo.png" sizes="32x32" />
			</head>

			<body>

				<nav class="fondo-tranparente">
					<div class="menu">

						<div class="logo"></div>

						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#productos">Productos</a></li>
							<li><a href="#contactanos">Cont&aacute;ctanos</a></li>
						</ul>
					</div>
				</nav>
	';	

	comprimir($HTML);
?>