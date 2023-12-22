<?php
	session_start();
	include "modelo/conexion.php";

	if (isset($_GET["mensaje"])) {
		$mensaje = "{$_GET['mensaje']}";
	}

	$emailValue = isset($_GET["email"]) ? $_GET["email"] : "";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agradecimiento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="admin">

<div class="loginAdmin container">
    <div class="loginTitulo titulo">
        <span>Iniciar Sesión</span>
    </div>

    <form id="login" method="post" action="validarLoginAdmin.php">
        <input type="email" name="email" placeholder="Email" value="<?php echo $emailValue; ?>" class="entrada">
        <input type="password" name="pass" placeholder="Contraseña" class="entrada">
        <input type="submit" value="Entrar" class="button">
        <p>¿Quieres Registrarte? <a href="registroAdmin.php" title="Registro de Usuario">Pincha Aquí</a> </p>
    </form>

    <h3 class="formulario error"></h3>
</div>
</body>
</html>