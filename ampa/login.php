<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $pass = $_POST['pass'];

    if (!empty($email) && !empty($pass)) {
        $stmt = $conn->prepare("SELECT id, email, pass FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && $pass === $user['pass']) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['user_id'] = $user['id']; // Puedes almacenar más información si es necesario
            header('Location: formulario.php'); // Redirige a la página de inicio después del inicio de sesión
            exit();
        } else {
            echo "Credenciales incorrectas.";
        }
        $stmt->close();
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
    <title>Iniciar Sesión - AMPA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="" method="post">
    <h1>Iniciar Sesión</h1>
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" required>

        <button type="submit">Iniciar Sesión</button>
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
    </form>
    
</body>
</html>