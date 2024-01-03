<?php
include ('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_padre = $_POST['nombre_padre'];
    $apellido_padre = $_POST['apellido_padre'];
    $email_padre = $_POST['email_padre'];
    $telefono_padre = $_POST['telefono_padre'];
    $nombre_madre = $_POST['nombre_madre'];
    $apellido_madre = $_POST['apellido_madre'];
    $email_madre = $_POST['email_madre'];
    $telefono_madre = $_POST['telefono_madre'];
    $nombre_alumno = $_POST['nombre_alumno'];
    $nivel_estudios = $_POST['nivel_estudios'];

    // Insertar datos en la tabla padres
    $sql_padres = "INSERT INTO padres (nombre_padre, apellido_padre, email_padre, telefono_padre, nombre_madre, apellido_madre, email_madre, telefono_madre)
                   VALUES ('$nombre_padre', '$apellido_padre', '$email_padre', '$telefono_padre', '$nombre_madre', '$apellido_madre', '$email_madre', '$telefono_madre')";

    if ($conn->query($sql_padres) === FALSE) {
        echo "Error: " . $sql_padres . "<br>" . $conn->error;
    }

    // Obtener el ID del padre insertado
    $id_padre = $conn->insert_id;

    // Insertar datos en la tabla nivel_estudios
    $sql_nivel = "INSERT INTO nivel_estudios (nombre_alumno, nivel, id_padre)
                  VALUES ('$nombre_alumno', '$nivel_estudios', '$id_padre')";

    if ($conn->query($sql_nivel) === FALSE) {
        echo "Error: " . $sql_nivel . "<br>" . $conn->error;
    }

    header('Location: agradecimiento.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - AMPA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Formulario de Datos</h1>
    <form action="" method="post">
        <h2>Datos del Padre y la Madre</h2>
        <label for="nombre_padre">Nombre del Padre:</label>
        <input type="text" name="nombre_padre" required>

        <label for="apellido_padre">Apellido del Padre:</label>
        <input type="text" name="apellido_padre" required>

        <label for="email_padre">Email del Padre:</label>
        <input type="email" name="email_padre" required>

        <label for="telefono_padre">Teléfono del Padre:</label>
        <input type="text" name="telefono_padre" required>

        <label for="nombre_madre">Nombre de la Madre:</label>
        <input type="text" name="nombre_madre" required>

        <label for="apellido_madre">Apellido de la Madre:</label>
        <input type="text" name="apellido_madre" required>

        <label for="email_madre">Email de la Madre:</label>
        <input type="email" name="email_madre" required>

        <label for="telefono_madre">Teléfono de la Madre:</label>
        <input type="text" name="telefono_madre" required>

        <h2>Datos del Alumno</h2>
        <label for="nombre_alumno">Nombre del Alumno:</label>
        <input type="text" name="nombre_alumno" required>

        <label for="nivel_estudios">Nivel de Estudios:</label>
        <select name="nivel_estudios" required>
            <option value="primero">Primero</option>
            <option value="segundo">Segundo</option>
            <option value="tercero">Tercero</option>
            <option value="cuarto">Cuarto</option>
            <option value="quinto">Quinto</option>
            <option value="sexto">Sexto</option>
        </select>

        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>