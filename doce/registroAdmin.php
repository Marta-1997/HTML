<?php
	include "header.php";
	session_start();
	include "modelo/conexion.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="loginRegistro bienvenidos">

<div class="container loginAdmin">
    <div class="loginTitulo titulo1">
        <span>Registro de Usuario</span>
    </div>

    <form id="login" method="post" class="loginAdmin" action="validarRegistroAdmin.php">
        <input type="text" name="nombre" placeholder="Nombre y Apellido" value="<?php if(isset($_GET["nombre"])){echo $_GET["nombre"];} ?>" class="entrada">
        <input type="email" name="usuario" placeholder="Email" value="<?php if(isset($_GET["email"])){echo $_GET["email"];} ?>" class="entrada">
        <input type="email" name="usuario2" placeholder="Repetir Email" class="entrada">
        <input type="password" name="pass" placeholder="Contraseña" class="entrada">

        <input type="submit" value="Entrar" class="boton">
    </form>
</div>
</body>