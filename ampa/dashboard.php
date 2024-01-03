<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include('config.php');

// Retrieve all student data from the database
$sql = "SELECT * FROM nivel_estudios";
$result = $conn->query($sql);

// Check if there are any students
if ($result->num_rows > 0) {
    $students = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $students = array(); // Empty array if no students found
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AMPA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Alumnos Registrados</h1>

        <?php if (!empty($students)): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Alumno</th>
                        <th>Nivel de Estudios</th>
                        <!-- Add additional columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo $student['id']; ?></td>
                            <td><?php echo $student['nombre_alumno']; ?></td>
                            <td><?php echo $student['nivel']; ?></td>
                            <!-- Add additional cells with corresponding data -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay alumnos registrados.</p>
        <?php endif; ?>

        
    </div>
</body>
</html>