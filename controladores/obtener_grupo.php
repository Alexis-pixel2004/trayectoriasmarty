<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

require_once '../db/conexion.php';
require_once '../clases/Grupo.php';
require_once '../clases/Grado.php';

// Instanciar modelos
$grupoModel = new Grupo($conn);
$gradoModel = new Grado($conn);

// Obtener IdGrupo desde POST
$idGrupo = $_POST['IdGrupo'] ?? null;

if ($idGrupo) {
    // Obtener grupo específico
    $grupo = $grupoModel->obtenerPorId($idGrupo);

    // Obtener todos los grados disponibles
    $grados = $gradoModel->listarTodos();

    // Respuesta combinada
    echo json_encode([
        "grupo" => $grupo,
        "grados" => $grados
    ]);
} else {
    echo json_encode(["error" => "IdGrupo requerido"]);
}

