<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'] ;
    $email = $_POST['email'] ;
    $pass = $_POST['pass'];

    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($pass)) {
        $query = "INSERT INTO usuarios (nombre, apellido, email, pass) VALUES ('$nombre', '$apellido', '$email', '$pass')";

        if ($conn->query($query)) {
            header('Location: login.php');
            exit();
        } else {
            echo "Error durante la ejecución de la consulta: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - AMPA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="" method="post">
    <h1>Registro</h1>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" required>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>