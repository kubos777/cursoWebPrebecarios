<?php
	//Conectamos con el servidor que contiene nuestra base de datos.
	//El metodo "die" activa en caso de que la conexio no se halla podido establecer.
	$conectar = mysqli_connect("localhost","root","","login") or die ("<h2>Error al conectar con el servidor.</h2>");
	
	/*//Esto tendriamos que hacer si no hubiesemos querido usar el metodo "die"
	if (!$conectar) {
		echo "Error al conectar el servidor!";
	}else{
		//Conectamos con la base de datos
		$base = mysql_select_db('Login');
		if (!$base) {
			echo "La base de datos no existe";
		}
	}*/
?>