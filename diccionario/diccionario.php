<!DOCTYPE HTML>
<html lang="en">
 <!-- Esta es la pagina principal del diccionario Embera Chami, español donde se da acceso a todas las categorias-->
<head>
	<title>EMBERA CHAMI</title>
	<meta charset="utf-8" />
	<link rel="icon" href="../images/tucan.ico" type="image/vnd.microsoft.icon">  
	<link rel="shortcut icon" href="../images/tucan.ico" type="image/vnd.microsoft.icon">
	<script src="../assets/js/jquery.min.js"></script> <script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/jquery.dropotron.min.js"></script> <script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/skel.min.js"></script> <script src="../assets/js/util.js"></script> <script src="../assets/js/main.js"></script>
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js" ></script> <script type="text/javascript" src="../js/roundabout.js"></script>
	<script type="text/javascript" src="../js/roundabout_shapes.js"></script> <script type="text/javascript" src="../js/gallery_init.js"></script>
	<link rel="stylesheet" href="../assets/css/main.css"/> <link rel="stylesheet" href="../css/style.css" type="text/css" media="all"/>
</head>
<body class="landing">
	<div id="page-wrapper">
		<header id="header">
			<nav id="nav">
				<ul>
					<li><a href="../embera.html"><b>INICIO</b></a></li>
					<li>
						<a><b>APLICACIONES</b></a>
						<ul><li><a href="../diccionario/diccionario.php"><b>Diccionario</b></a></li></ul>
					</li>
					<li>
						<a href="../enlaces/cultura.php"><b>CONOCE NUESTRA CULTURA</b></a>
						<ul>
							<li><a href="../enlaces/cultura.php#ubicacion"><b>Ubicación</b></a></li>
							<li><a href="../enlaces/cultura.php#poblacion"><b>Población</b></a></li>
							<li><a href="../enlaces/cultura.php#idioma"><b>Idioma</b></a></li>
							<li><a href="../enlaces/cultura.php#vivienda"><b>Vivienda</b></a></li>
							<li><a href="../enlaces/cultura.php#vestimenta"><b>Vestimenta</b></a></li>
							<li><a href="../enlaces/cultura.php#economia"><b>Economía</b></a></li>
							<li><a href="../enlaces/cultura.php#organizacion"><b>Organización Social y Política</b></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
	</div>


<!--?php

	include("../base/head.php");
?-->
<link rel="stylesheet" href="css/style.css" />

<body class="landing">
 <!-- Presentación de la aplicación y ejemplos de su funcionamiento-->
<section id="banner">
	<div class="content">
		<div  id="categoriasPrincipal" align="center"><img src="images/categorias.gif" alt="Categorias"></div>
		<h3 align="justify"> Bienvenido a la sección de categorías, donde encontraras varias palabras pertenecientes a tu cultura, cada una de ellas presenta su escritura en emberá chamí y en español además de su pronunciación y un dibujo alusivo.</h3><br>
           <h3 align="left">Ejemplos:</h3>
			<div style="display:inline-block;">
				<img alt="Mujer" src="images/mujer.png" id="mujerIm"  class="imPresDic" /><div style="text-align:center" 
				<button style="border-color:transparent;background-color: transparent;" onclick="document.getElementById('mujer').play();"><img src="images/play-button.png" width="35px"></button>
				<audio id="mujer" src="Voz_Diccionario/partes del cuerpo/mujer.wav"></audio> </div>
				
			</div>
			<div style="display:inline-block;">
				<img alt="Hombre" src="images/hombre.png" id="hombreIm"  class="imPresDic" /><div style="text-align:center"
				<button style="border-color:transparent;background-color: transparent;" onclick="document.getElementById('hombre').play();"><img src="images/play-button.png" width="35px"></button>
				<audio id="hombre" src="Voz_Diccionario/partes del cuerpo/hombre.wav"></audio> </div>
				
			</div>
			<div style="display:inline-block;">
				<img alt="Niña" src="images/NIÑA.png" id="niñaIm"  class="imPresDic" /><div style="text-align:center"
				<button style="border-color:transparent;background-color: transparent;" onclick="document.getElementById('niña').play();"><img src="images/play-button.png" width="35px"></button>
				<audio id="niña" src="Voz_Diccionario/partes del cuerpo/niña.wav"></audio> </div>
				
			</div>
			<div style="display:inline-block;">
				<img alt="Niño" src="images/NIÑO.png" id="niñoIm" class="imPresDic" /><div style="text-align:center"
				<button style="border-color:transparent;background-color: transparent;" onclick="document.getElementById('niño').play();"><img src="images/play-button.png" width="35px"></button>
				<audio id="niño" src="Voz_Diccionario/partes del cuerpo/niño.wav"></audio> </div>
			</div><br>
	 <!-- En el siguiente bloque se direcciona a la pagina de cada categoria-->
		<header class="major"><br>
		
		<h3 align="left"> Las categorías que tenemos para ti son: </h3><br>
           			
			<br><div align="center"> 
            <a  href="vocales.php"><img id="categorias" alt="Las vocales" src="images/vocales1.gif"/></a>
			<a  href="consonantes.php"><img id="categorias" alt="Las Consonantes" src="images/conso1.gif"/></a>
			<a  href="numeros.php"><img id="categorias" alt="Los Números" src="images/numeros1.png"/></a>
			<a  href="colores.php"><img id="categorias" alt="Los colores" src="images/colores1.gif"/></a>
			<a  href="pronombre.php"><img id="categorias" alt="Los Pronombres" src="images/pro1.gif"/></a>
			<a  href="familia.php"><img id="categorias" alt="La Familia" src="images/fami1.gif"/></a>
			<a  href="saludos.php"><img id="categorias" alt="El saludo" src="images/saludo1.gif"/></a>
			<a  href="cuerpo.php">  <img id="categorias" alt="Partes del cuerpo" src="images/partes1.gif"/></a>
			<a  href="alimentos.php"><img id="categorias" alt="Los alimentos" src="images/alimentos1.gif"/></a>
			<a  href="animales.php"><img id="categorias" alt="Los animales" src="images/animales1.gif"/></a>
	<!--	<a  href="elementos.php"><img id="categorias" alt="Los elementos" src="images/ele1.gif"/></a>-->
			</div>
		</header>
	</div>
</section>



<!--?php
	include("../base/pie.php");
?-->


	<footer id="footer" class="pie" >
		<a href="http://froac.manizales.unal.edu.co/GAIA/" target="_blank" ><img id="logo" src="../images/logoGaia.gif" width="40%" alt="logo GAIA Grupo de Ambientes Inteligentes Adaptativos Universidad Nacional de Colombia Sede Manizales" ></a>
		<a ><img id="logo" src="../images/niaza.png" width="10%" alt="Logo Carlos Arturo Niaza"></a>
	</footer>
</body>
</html>