<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';
require_once '../clases/AsignacionAlumnoGrupo.php';

// Instanciar modelos
$alumnoModel     = new Alumno($conn);
$asignacionModel = new AsignacionAlumnoGrupo($conn);

// Recibir datos del formulario
$nombre   = trim($_POST['Nombre'] ?? '');
$apellido = trim($_POST['Apellido'] ?? '');
$sexo     = $_POST['Sexo'] ?? '';
$fecha    = $_POST['FechaNacimiento'] ?? '';
$curp     = strtoupper(trim($_POST['CURP'] ?? ''));
$idGrupo  = $_POST['IdGrupo'] ?? null;

// Validar que si lleguen todos los datos
if ($nombre && $apellido && $sexo && $fecha && $curp && $idGrupo) {
    // Insertar alumno y obtener su ID
    $idAlumno = $alumnoModel->insertarYObtenerId($nombre, $apellido, $sexo, $fecha, $curp);

    if ($idAlumno) {
        // Asignar al grupo
        if ($asignacionModel->asignar($idAlumno, $idGrupo)) {
            echo "Alumno registrado y asignado correctamente";
        } else {
            http_response_code(500);
            echo "Alumno registrado, pero error al asignar al grupo";
        }
    } else {
        http_response_code(500);
        echo "Error al registrar alumno";
    }
} else {
    http_response_code(400);
    echo "Datos incompletos";
}

