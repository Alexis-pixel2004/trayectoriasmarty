<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';

header('Content-Type: application/json; charset=utf-8');

$alumnoModel = new Alumno($conn);

$idGrupo = $_POST['IdGrupo'] ?? null;

if ($idGrupo) {
    $alumnos = $alumnoModel->listarPorGrupo($idGrupo);
    echo json_encode($alumnos);
} else {
    http_response_code(400);
    echo json_encode(["error" => true, "message" => "Grupo no especificado"]);
}

