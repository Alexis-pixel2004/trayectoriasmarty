<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';

header('Content-Type: application/json; charset=utf-8');

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

    echo json_encode([
        "success" => $resultado,
        "message" => $resultado ? "Alumno actualizado correctamente" : "Error al actualizar"
    ]);
} else {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Datos incompletos"
    ]);
}
