
<?php
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
<body>


<h1 class="bienvenidos">BIENVENIDOS A AMPA</h1>
<div class="container">

<h1 class="titulo">FORMULARIO DE INSCRIPCIÓN</h1>
<form id="login" method="post" class="loginAdmin" action="agradecimiento.php"">
<div class="row">
    <div class="col-25">
        <label for="padre">Padre:</label>
    </div>
    <div class="col-75">
        <input type="text" id="padre" name="padre" >
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label for="madre">Madre:</label>
    </div>
    <div class="col-75">
        <input type="text" id="madre" name="madre" >
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label for="direccion">Direccion:</label>
    </div>
    <div class="col-75">
        <input type="text" id="direccion" name="direccion" >
    </div>
</div>

<div class="row">
    <div class="col-25">
        <label for="telefonos">Telefonos:</label>
    </div>
    <div class="col-75">
        <input type="tel" id="telefonoP" name="telefonoP" placeholder="Padre">
        <input type="tel" id="telefonoM" name="telefonoM" placeholder="Madre">
    </div>

</div>

<div class="row">
    <div class="col-25">
        <label for="email">Email:</label>
    </div>
    <div class="col-75">
        <input type="email" id="emailP" name="emailP" placeholder="Padre" >
        <input type="email" id="emailM" name="emailM" placeholder="Madre">
    </div>

</div>

<h1 class="titulo">NOMBRE Y APELLIDOS DEL ALUMNO</h1>

<div class="row">

    <div class="col-75">
        <input type="text" id="alumnoN" name="nombreAlumno" >
    </div>
    <div class="col-75">
        <input type="text" id="alumnoA" name="alumnoA" >
    </div>
    <div>

    <label for="curso">Curso</label>
    <select id="curso" name="curso">
        <option value="primero">Primero</option>
        <option value="segundo">Segundo</option>
        <option value="tercero">Tercero</option>
        <option value="cuarto">Cuarto</option>
        <option value="quinto">Quinto</option>
        <option value="sexto">Sexto</option>
    </select>
    </div>
</div>
    <br>
    <input class="boton" type="submit" value="Enviar" >
    </form>








</div>
</body>
</html>