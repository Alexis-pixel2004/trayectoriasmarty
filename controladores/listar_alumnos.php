<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';

header('Content-Type: application/json; charset=utf-8');

$alumnoModel = new Alumno($conn);

$idGrupo = $_POST['IdGrupo'] ?? null;

if ($idGrupo) {
    $alumnos = $alumnoModel->listarPorGrupo($idGrupo);
    echo json_encode($alumnos);
} else {
    echo json_encode(["error" => true, "message" => "Grupo no especificado"]);
}
