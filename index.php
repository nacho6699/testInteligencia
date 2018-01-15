<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--para qe se vea bien en dispositivos moviles-->
	<title>Test UATF</title>
	<link rel="stylesheet" href="">
	<script src="js/jquery-3.1.1.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/tinysort.min.js"></script>

	

	



	<script>
		$(function(){
			$('#cargar').click(function(){
				$("li").removeClass("active");
   				$(this.parentNode).addClass("active");
				$.ajax({
		            type: "POST",
		            //data: dataString,
		            url: "preguntas.php",
		       		success: function(a) {

		       			//$('#contenedor').slideDown(30000).html(a);
		       			$('#contenedor').html(a);

		          	}
				});
			});
			$('#login').click(function(){
				$("li").removeClass("active");
   				$(this.parentNode).addClass("active");
				$.ajax({
		            type: "POST",
		            //data: dataString,
		            url: "login.php",
		       		success: function(a) {

		       			//$('#contenedor').slideDown(30000).html(a);
		       			$('#contenedor').html(a);

		          	}
				});
			});
			$('#registro').click(function(){
				$("li").removeClass("active");
   				$(this.parentNode).addClass("active");
				$.ajax({
		            type: "POST",
		            //data: dataString,
		            url: "registro.php",
		       		success: function(a) {

		       			//$('#contenedor').slideDown(30000).html(a);
		       			$('#contenedor').html(a);

		          	}
				});
			});


		});
		
	</script>
	<style type="text/css">

		body{
			background: #D5DBDB;
		}

		#dialogo{
			display: none;

		}
	</style>
	</head>
<body>
<header>
	<nav id='menu' role="navigation" class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Test Vocacional</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="#" id="login">Login</a></li>
                <li><a href="#" id="registro">Registrarse</a></li>
                <li><a href="#" id="cargar">Hacer el Test Sin Registro</a></li>
               
            </ul>
        </div>
	</nav>
</header>

<!--<button class="btn btn-primary" id="cargar">ENTRAR AL TEST</button>-->

<div id="contenedor" class='container'>
	<h2>Bienvenido al Test...Por el momento prueba en: Hacer Test Sin Registro<span class="glyphicon glyphicon-headphones"></span></h2>
	<center><IMG SRC="img/test.jpg" WIDTH=500 HEIGHT=300 BORDER=2 ALT="Nachooo" title='hola soy nacho' class='img-responsive'></center>
</div>

<div id="dialogo" title="Detalle">
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<link href="js/jquery-ui.css" rel="stylesheet">
</body>
</html>