<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

include('config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimiento - AMPA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>¡Gracias por registrarte!</h1>
    <p>Te agradecemos por completar el formulario. Tu número de alta es: <?php echo $user_id; ?></p>
    <p><a href="dashboard.php">Ver tabla de alumnos registrados</a></p>
</body>
</html>