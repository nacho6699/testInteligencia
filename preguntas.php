
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" href="">

	

	<script>
		
		var linguistica=0;
		var cinestica=0;
		var interpersonal=0;
		var musical=0;
		var intrapersonal=0;
		var logico=0;
		var visual=0;
		var naturalista=0;
		var aux=0;
		
		$(function(){
			 //$("input[id=1]").click(function () { 
			 //$('#contenido').hide();

			 $("#iniciar").click(function () { 
			 	$('#contenido').slideDown(3000);
			 	$('#iniciar').hide();
		    }); 	
		

			$("input[id=1]").click(function () { 
		        linguistica ++;
		        
		        //alert(linguistica);
		      	$(this.parentNode).hide(1000);
		      	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=2]").click(function () { 
			 	cinestica ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=3]").click(function () { 
			 	interpersonal ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=4]").click(function () { 
			 	musical ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=5]").click(function () { 
			 	intrapersonal ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=6]").click(function () { 
			 	logico ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=7]").click(function () { 
			 	visual ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=8]").click(function () { 
			 	naturalista ++;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 //-----------------aveces---------
			 $("input[id=a1]").click(function () { 
		        linguistica +=0.5;
		        
		        //alert(linguistica);
		      	$(this.parentNode).hide(1000);
		      	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=a2]").click(function () { 
			 	cinestica +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=a3]").click(function () { 
			 	interpersonal +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=a4]").click(function () { 
			 	musical +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=a5]").click(function () { 
			 	intrapersonal +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=a6]").click(function () { 
			 	logico +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=a7]").click(function () { 
			 	visual +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=a8]").click(function () { 
			 	naturalista +=0.5;
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			
			 //---------------------------no------------------
			 $("input[id=n1]").click(function () { 
		      	$(this.parentNode).hide(1000);
		      	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=n2]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=n3]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=n4]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
		    }); 
		    $("input[id=n5]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=n6]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=n7]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 $("input[id=n8]").click(function () { 
			 	$(this.parentNode).hide(1000);
			 	aux++;
		      	if(aux>=30){
		      		$("#evaluar").show();
		      	}
			 });
			 
		  	//evaluar
		  	//var array=[linguistica,cinestica,interpersonal,musical,intrapersonal,logico,visual,naturalista];
		  	$("#evaluar").click(function (){

		  		var suma=linguistica+cinestica+interpersonal+musical+intrapersonal+logico+visual+naturalista;

		  		$("#contenedor").html("<h4>Tus resultados segun Howard Gardner</h4>");

		  		$("#contenedor").append("<pre id="+linguistica+"><label id='lr'><span class='glyphicon glyphicon-book'></span> Linguistico - Verbal</label>    <input type='button' id='l' value=''class='btn btn-success'> <button id='btn_detalle1'><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+cinestica+"><label id='lr'><span class='glyphicon glyphicon-screenshot'></span> Corporal - Cinestésica</label>  <input type='button' id='c' value=''class='btn btn-success'> <button id=btn_detalle2><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+interpersonal+"><label id='lr'><span class='glyphicon glyphicon-phone-alt'></span> Interpersonal</label>           <input type='button' id='i' value=''class='btn btn-success'> <button id=btn_detalle3><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+musical+"><label id='lr'><span class='glyphicon glyphicon-headphones'></span> Musical</label>   		   <input type='button' id='m' value=''class='btn btn-success'> <button id=btn_detalle4><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+intrapersonal+"><label id='lr'><span class='glyphicon glyphicon-user'></span> Intrapersonal</label>           <input type='button' id='in' value=''class='btn btn-success'> <button id=btn_detalle5><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+logico+"><label id='lr'><span class='glyphicon glyphicon-qrcode'></span> Lógico - Matematico</label>     <input type='button' id='lo' value=''class='btn btn-success'> <button id=btn_detalle6><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+visual+"><label id='lr'><span class='glyphicon glyphicon-eye-open'></span> Visual - Espacial</label>       <input type='button' id='v' value=''class='btn btn-success'> <button id=btn_detalle7><span class='glyphicon glyphicon-question-sign'></span></button></pre>");
		  		$("#contenedor").append("<pre id="+naturalista+"><label id='lr'><span class='glyphicon glyphicon-leaf'></span> Naturalista</label> 		   <input type='button' id='n' value=''class='btn btn-success'> <button id=btn_detalle8><span class='glyphicon glyphicon-question-sign'></span></button></pre>");

		  		$("#l").val((Math.round((linguistica/suma)*100))+" %").css({ 'width':linguistica*50});
		  		$("#c").val((Math.round((cinestica/suma)*100))+" %").css({ 'width':cinestica*50 });
		  		$("#i").val((Math.round((interpersonal/suma)*100))+" %").css({ 'width':interpersonal*50 });
		  		$("#m").val((Math.round((musical/suma)*100))+" %").css({ 'width':musical*50 });
		  		$("#in").val((Math.round((intrapersonal/suma)*100))+" %").css({ 'width':intrapersonal*50 });
		  		$("#lo").val((Math.round((logico/suma)*100))+" %").css({ 'width':logico*50 });
		  		$("#v").val((Math.round((visual/suma)*100))+" %").css({ 'width':visual*50 });
		  		$("#n").val((Math.round((naturalista/suma)*100))+" %").css({ 'width':naturalista*50 });

		  	
			
			 	tinysort('#contenedor > pre' , {order:'desc', attr:'id'});	


		  		/*
		  		var array=[linguistica,cinestica,interpersonal,musical,intrapersonal,logico,visual,naturalista];
		  		var max=Math.max.apply(null, array);
		  		var posicion=array.indexOf(max);

		  		if(posicion==0){
		  			$("#contenedor").html("<h3>estas en el campo de lisguistica</h3>");
		  		}
		  		if(posicion==1){
		  			$("#contenedor").html("<h3>estas en el campo de cinestica</h3>");
		  		}
		  		if(posicion==2){
		  			$("#contenedor").html("<h3>estas en el campo de INTERPERSONAL</h3>");
		  		}
		  		if(posicion==3){
		  			$("#contenedor").html("<h3>estas en el campo de MUSICAL</h3>");
		  		}
		  		if(posicion==4){
		  			$("#contenedor").html("<h3>estas en el campo de iNTRAPERSONAL</h3>");
		  		}
		  		if(posicion==5){
		  			$("#contenedor").html("<h3>estas en el campo de LOGICO MATEMATICO</h3>");
		  		}
		  		if(posicion==6){
		  			$("#contenedor").html("<h3>estas en el campo de VISUAL</h3>");
		  		}
		  		if(posicion==7){
		  			$("#contenedor").html("<h3>estas en el campo de NATURALISTA</h3>");
		  		}
				*/
				/* mis respuestas resultados  */
				$("#btn_detalle1").click(function(){
					
					$.post("buscar.php", {valorBusqueda: 1}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Linguistica</li><li>Carrera de Derecho</li><li>Carrera de Pedagogia</li></ul>");
       				});
       				$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
       				
				});
				$("#btn_detalle2").click(function(){
					$.post("buscar.php", {valorBusqueda: 2}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Medicina</li><li>Gastronomia</li><li>Actuación y Danza</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle3").click(function(){
					$.post("buscar.php", {valorBusqueda: 3}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Trabajo Social</li><li>Carrera de Turismo</li><li>Carrera de Administración de Empresas</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle4").click(function(){
					$.post("buscar.php", {valorBusqueda: 4}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Artes Músicales</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle5").click(function(){
					$.post("buscar.php", {valorBusqueda: 5}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Enfermeria</li><li>Carrera de Psicología</li><li>Carrera de Filosofia</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle6").click(function(){
					$.post("buscar.php", {valorBusqueda: 6}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Ing. Sistemas</li><li>Carrera de Ing. Civíl</li><li>Carrera de Ing. Informática</li><li>Carrera de Ing. Construcciones Civiles</li><li>Carrera de Ing. Topográfica</li><li>Carrera de Ing. Eléctrica</li><li>Carrera de Ing. Electrónica</li><li>Carrera de Ing. Mecánica</li><li>Carrera de Ing. Mecatrónica</li><li>Carrera de Contabilidad</li><li>Carrera de Auditoria</li><li>Carrera de Economia</li><li>Carrera de Estadística</li><li>Carrera de Física</li><li>Carrera de Química</li><li>Carrera de Matemática</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, width:350, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle7").click(function(){
					$.post("buscar.php", {valorBusqueda: 7}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Arquitectura</li><li>Carrera de Artes Plásticas</ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
				$("#btn_detalle8").click(function(){
					$.post("buscar.php", {valorBusqueda: 8}, function(mensaje) {
           				$("#dialogo").html(mensaje);
           				$("#dialogo").append("<h4>Carreras que puede optar:</h4><ul><li> Carrera de Ing. de Medio Ambiente</li><li>Carrera de Geología</li><li>Carrera de Proc. de Materias Primas</li><li>Carrera de Ing. Minera</li><li>Carrera de Ing. Agroindustrial</li><li>Carrera de Ing. Agronómica</li><li>Carrera de Ing. de Desarrollo Rural</li><li>Carrera de Ing. Agropecuaria</li><li>Carrera de Veterinaria</li></ul>");
       				});
					$("#dialogo").dialog({autoOpen: true, show:"fold", hide:"scale"});
				
				});
		  	});
			
		  	
		});
	</script>
	<style>
	body{
		background: #D5DBDB;
	}
	.contP{
		width:70%;
		padding:10px;
		
		border-radius:10px;
		color:#EAE4E5;
		box-shadow: inset 0 0 0 5px #D5DBDB;

		background: rgba(231,167,174,1);
		background: -moz-linear-gradient(top, rgba(231,167,174,1) 0%, rgba(206,59,76,1) 4%, rgba(168,36,51,1) 51%, rgba(238,114,129,1) 100%);
		background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(231,167,174,1)), color-stop(4%, rgba(206,59,76,1)), color-stop(51%, rgba(168,36,51,1)), color-stop(100%, rgba(238,114,129,1)));
		background: -webkit-linear-gradient(top, rgba(231,167,174,1) 0%, rgba(206,59,76,1) 4%, rgba(168,36,51,1) 51%, rgba(238,114,129,1) 100%);
		background: -o-linear-gradient(top, rgba(231,167,174,1) 0%, rgba(206,59,76,1) 4%, rgba(168,36,51,1) 51%, rgba(238,114,129,1) 100%);
		background: -ms-linear-gradient(top, rgba(231,167,174,1) 0%, rgba(206,59,76,1) 4%, rgba(168,36,51,1) 51%, rgba(238,114,129,1) 100%);
		background: linear-gradient(to bottom, rgba(231,167,174,1) 0%, rgba(206,59,76,1) 4%, rgba(168,36,51,1) 51%, rgba(238,114,129,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e7a7ae', endColorstr='#ee7281', GradientType=0 );
		}
	/*hhhhhhhhhhhhhhhhhhhhhhhhhhhhh*/

	label{
		color: #A9DFBF;
		font-size:30px;
	}
	
	#iniciar{
	 top: 0px;
	 left: 0px;
	 width: 130px;
	 height: 42px;
	 color:#fff;
	 font-size: 18px;
	 background: #34495E;
	 border-radius: 5px;
	 transition: all 2s ease;
	}
	#iniciar:hover{
		background: red;
		font-size: 25px;
	 	width: 150px;
	 	cursor: pointer;
	}
	#contenido{
		display:none;
	}
	#evaluar{
		display:none;
		margin-top: 0%;
	}


	</style>
</head>
<body>
<CENTER>
<button id='iniciar'>Iniciar Test</button>
<h4>Responde porlomenos mas de lamitad de las preguntas, para poder evaluarte...</h4>
<div id='contenido'>

<?php 


	include("conexion.php");

	//mysqli_query($enlace,"SELECT * FROM tbl_name ORDER BY RAND()");
	$resultado = mysqli_query($enlace,"SELECT id_cat, nombre_p FROM preguntas ORDER BY RAND()");
	if (!$resultado) {
	    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
	    exit;
	}
	//$fila = mysql_fetch_row($resultado);
	//echo $fila[0]; // 42
	//echo $fila[1]; // el valor de email
	$con=1;

	//echo "<table border = '1' id='tabla'> \n"; 
	//echo "<tr><td>ID</td><td>Pregunta</td></tr> \n"; 
	while ($row = mysqli_fetch_row($resultado)){ 
	       echo "<div class='contP' id='$con'><h3>$row[1]</h3>
	       	<label for='test$con'>Si</label>
			<input type='radio'class='radioP' name='test$con'id='$row[0]'value='Si' style='height:25px; width:25px; vertical-align: middle;'>
			<label for='test$con'>No</label>
	       	<input type='radio'class='radioP' name='test$con'id='n$row[0]'value='No' style='height:25px; width:25px; vertical-align: middle;'>
	       	<label for='test$con'>A veces</label>
	       	<input type='radio'class='radioP' name='test$con'id='a$row[0]'value='A veces' style='height:25px; width:25px; vertical-align: middle;'>
	       </div>"; 
	     $con++;
	} 
	

	
?>
<div id="res"></div>
<input type="button" id="evaluar" class="btn btn-primary btn-lg" value="Ver Resultados">
</div>


</CENTER>

</body>
</html>