<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';

$grupoModel = new Grupo($conn);
$idGrupo = $_POST['IdGrupo'] ?? null;

if ($idGrupo) {
    $grupo = $grupoModel->obtenerPorId($idGrupo);
    echo json_encode($grupo);
} else {
    http_response_code(400);
    echo json_encode(["error" => "IdGrupo requerido"]);
}
