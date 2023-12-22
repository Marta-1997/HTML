<?php
	include "modelo/conexion.php";
	$link = conectar();

	$padre = $_POST["padre"];
	$madre = $_POST["madre"];
	$emailP = $_POST["emailP"];
	$emailM = $_POST["emailM"];
	$telefonoP = $_POST["telefonoP"];
	$telefonoM = $_POST["telefonoM"];
	$direccion = $_POST["direccion"];

	if (((!empty($padre) || !empty($madre)) && (!empty($emailP) || !empty($emailM)) && (!empty($telefonoP) || !empty($telefonoM)) && (!empty($_POST["nombreAlumno"])) && (!empty($direccion)))) {
		$insertarPadre = "INSERT INTO padres (padre, madre, direccion, telefono_padre, telefono_madre, email_padre, email_madre) VALUES 
            ('$padre', '$madre', '$direccion', '$telefonoP', '$telefonoM', '$emailP', '$emailM')";

		$insertarAlumno = "INSERT INTO alumnos (nombre_completo) VALUES ('$padre', '$madre', '$direccion', '$telefonoP', '$telefonoM', '$emailP', '$emailM')";

		$resultPadre = mysqli_query($link, $insertarPadre);

		if ($resultPadre) {
			$resultAlumno = mysqli_query($link, $insertarAlumno);

			if ($resultAlumno) {
				mysqli_close($link);
				$mensaje = "Alta realizada correctamente. Ya puede iniciar sesión";
				header("Location: http://localhost:63342/AMPA/loginAdmin.php?mensaje=$mensaje");
			} else {
				mysqli_close($link);
				$mensaje = "Existe un error al realizar el alta del alumno";
				header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje");
			}
		} else {
			mysqli_close($link);
			$mensaje = "Existe un error al realizar el alta del padre";
			header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje");
		}
	} else {
		$mensaje = "Todos los campos son requeridos";
		header("Location: http://localhost:63342/AMPA/registroAdmin.php?mensaje=$mensaje");
	}

?>





