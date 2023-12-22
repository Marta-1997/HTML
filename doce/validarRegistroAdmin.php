<?php
	include "modelo/conexion.php";
	$link = conectar();

	$nombre = $_POST["nombre"];
	$usuario = $_POST["usuario"];
	$usuario2 = $_POST["usuario2"];
	$pass = $_POST["pass"];
	function validarEmail($email)
	{
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";
		return preg_match($regex, $email);
	}

	function validarEmailBBDD($email)
	{
		global $link;
		$consulta = "SELECT email FROM usuario_adm WHERE email='$email'";
		$resultado = mysqli_query($link, $consulta);
		return mysqli_num_rows($resultado) === 0;
	}

	if (empty($nombre) || empty($usuario) || empty($usuario2) || empty($pass)) {
		$mensaje = "Debe rellenar todos los datos";
		header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje&nombre=$nombre&email=$usuario");
		exit();
	}

	if (!validarEmail($usuario) || $usuario != $usuario2 || !validarEmailBBDD($usuario)) {
		$mensaje = "Validar datos";
		header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje&nombre=$nombre&email=$usuario");
		exit();
	}

	$insertarUser = "INSERT INTO usuario_adm (email, pass, nombre) VALUES ('$usuario', '$pass', '$nombre')";

	$result = mysqli_query($link, $insertarUser);

	if ($result) {
		$mensaje = "Alta realizada correctamente";
		header("Location: http://localhost:63342/AMPA/loginAdmin.php?mensaje=$mensaje");
	} else {
		$mensaje = "Error";
		header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje");
	}

	mysqli_close($link);


?>