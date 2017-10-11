<?php 
	include('conexion.php');

	//Recuperamos las variables
	$nombre = $_POST['nombre'];
	//Con el metodo md5 encriptamos la contraseña, para dar mayor seguridad
	$contrasena = md5($_POST['contrasena']);
	$contrasena2 = md5($_POST['contrasena']);
	$correo = $_POST['correo'];

	if ($contrasena == $contrasena2) {
		//Declaramos la setenicia SQL
		$sql = "INSERT INTO usuario VALUES ('','$nombre', '$contrasena', '$correo')";

		$ejecutar = mysqli_query($conectar, $sql);

		if (!$ejecutar) {
			echo "Error al intertar ingresar usuario";
		}else{
			echo "Datos ingresados con exito";
		}
	}else{
		echo "Las contraseñas no coinciden.";
	}
?>