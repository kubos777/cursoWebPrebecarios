<?php
	include('conexion.php');

	$nombre = $_POST['nombre'];
	$contrasena = md5($_POST['contrasena']);

	$instruccion = "SELECT * FROM usuario WHERE nombre = \"". $nombre ."\" AND contrasena = \"".$contrasena."\"";
	$resultado = mysqli_query($conectar , $instruccion);
	if ($resultado != null) {
		echo "Bienvenido";
	}
	/*while ($fila = mysqli_fetch_array($resultado)) {
		echo "Has ingresado.";
	}*/
?>