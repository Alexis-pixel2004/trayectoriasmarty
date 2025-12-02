<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';

$alumnoModel = new Alumno($conn);

// Recibir datos del formulario
$id        = $_POST['IdAlumno'] ?? null;
$nombre    = $_POST['Nombre'] ?? '';
$apellido  = $_POST['Apellido'] ?? '';
$sexo      = $_POST['Sexo'] ?? '';
$fecha     = $_POST['FechaNacimiento'] ?? '';
$curp      = $_POST['CURP'] ?? '';

if ($id && $nombre && $apellido && $sexo && $fecha && $curp) {
    $resultado = $alumnoModel->actualizar([
        'IdAlumno'        => $id,
        'Nombre'          => $nombre,
        'Apellido'        => $apellido,
        'Sexo'            => $sexo,
        'FechaNacimiento' => $fecha,
        'CURP'            => $curp
    ]);

    if ($resultado) {
        echo "Alumno actualizado correctamente";
    } else {
        echo "Error al actualizar";
    }
} else {
    echo "Datos incompletos";
}
