<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>SICA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
		<link rel="stylesheet" href="css/estilos.css"/>
		<link rel="stylesheet" href="css/estilo_menu.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

		<style>
			*{
				margin: 0px;
				padding: 0px;
				-webkit-box-sizing:border-box;
				-moz-box-sizing:border-box;
				box-sizing:border-box;
			}

			body{
				background:#fff;
				font-family: verdana;
				line-height: 18px;
			}

			a{
				text-decoration: none;
				color: #fff;
			}

			header#menu{
				position: absolute;
				width: 170px;
				height: 100%;
				background-color: #1a95d5;
			}

			header#logo{	
				margin: 10px;
			}

			header#menu .menu{
				width: 100%;
			}

			header#menu .menu .icono{
				font-size: 12px;
				line-height: 18px;
			}

			header#menu .menu .icono.izquierda{
				float: left;
				margin-right: 10px;
			}
			 
			header#menu .menu .icono.derecha{
				float: right;
				margin-left: : 10px;
			}

			.menu{
			    padding:0;
			    list-style:none;
			    font-size:18px;
			    background:#1a95d5;    
			}

			.menu li a{
			    display: block;
			    border-bottom: 1px solid rgba(0,0,0, 0.2);
			    border-top: 1px solid rgba(255,255,255, 0.2);
			    background:#1a95d5;
			    text-decoration:none;
			    color:#FFF;
			    text-shadow: 1px 0px 1px rgba(0,0,0,0.2);
			    filter: dropshadow(color=#000, offx=1, offy=0);
			    padding:10px;
			    padding-left:20px;
			}

			.menu li ul li a, .submenu li ul li a{
			    font-size:14px;
			    background:#4a6ba2;
			    text-shadow: 1px 0px 1px rgba(255,255,255,0.5);
			}

			.menu li a:hover{
			    background:#c1c1c1;
			    -moz-transition: background 0.3s ease-in;
			    -webkit-transition: background 0.3s ease-in;
			    -o-transition: background 0.3s ease-in;
			}

			ul.menu ul, ul.submenu ul{
			    margin:0;
			    padding:0;
			    list-style:none;
			    height:0;
			    overflow: hidden;
			    transition:0.3s;
			    -moz-transition:0.3s;
			    -webkit-transition:0.3s;
			}


			ul.menu > li:hover > ul, ul.submenu > li:hover > ul{
			    height:100%;
			    overflow:visible;
			}
		}
		</style>
	</head>
	<body>
		<header id="menu">
			<header id="logo">
				<a href="index.php">
					<img src="images/frameworks.png" width="150" height="150"/>
				</a>
			</header>
			<ul class="menu">
				<li><a href="#"><i class="icono izquierda fa fa-cogs" aria-hidden="true"></i>Gestionar<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
					<ul class="submenu">
						<li><a href="?c=home">Home</a></li>
						<li><a href="?c=cliente">Clientes</a></li>
						<li><a href="?c=alquiler">Alquiler</a></li>
						<li><a href="?c=juego">VideoJuegos</a></li>
						<li><a href="?c=compra">Compras</a></li>
						<li><a href="?c=venta">Ventas</a></li>
					</ul>
				</li>
			</ul>
		</header>
		<div align="center">
			<h1 class="page-header">Prueba de Desarrollo</h1>
			<h2 class="page-header">PRUEBA DE INGRESO AL AREA DE E-COMMERCE</h2>
			<h3 class="page-header">Beatriz Sarmiento Carvajalino</h3>
			<h3 class="page-header">Modulo Adminstrador</h3>
		</div>
	</body>
</html>
