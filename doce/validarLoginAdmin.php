<?php
	session_start();
	$email = $_POST["email"];
	$passFormulario = $_POST["pass"];

	if (!empty($email) && !empty($passFormulario)) {
		include "modelo/conexion.php";
		$link = conectar();

		$consulta = "SELECT * FROM usuario_adm WHERE email='$email'";
		$resultado = mysqli_query($link, $consulta);

		if (mysqli_num_rows($resultado) > 0) {
			$registro = mysqli_fetch_assoc($resultado);
			$passBBDD = $registro["pass"];

			if (!empty($passFormulario)) {
				header("Location: http://localhost:63342/AMPA/index.php");
				exit();
			}
		} else {
			$mensaje = "No existe el usuario";
			mysqli_close($link);
			header("Location: http://localhost:63342/AMPA/loginAdmin.php?mensaje=$mensaje");
			exit();
		}
	} elseif (!empty($email) && empty($passFormulario)) {
		$mensaje = "No hay password";
		header("Location: http://localhost:63342/AMPA/loginAdmin.php?mensaje=$mensaje&email=$email");
		exit();
	} else {
		$mensaje = "Debe rellenar todos los campos";
		header("Location: http://localhost:63342/AMPA/loginAdmin.php?mensaje=$mensaje&email=$email");
		exit();
	}
?>

