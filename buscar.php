<?php
//Archivo de conexión a la base de datos
require('conexion.php');

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	$consulta= mysqli_query($enlace,"SELECT * from respuestas where id_cat=$consultaBusqueda");

	if (!$consulta) {
	    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
	    exit;
	}

	while ($row = mysqli_fetch_row($consulta)){ 

	    echo "<div>$row[2]</div>"; 
	   
	} 

	

};


?>