<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';

$grupoModel = new Grupo($conn);

$idGrupo     = $_POST['IdGrupo'] ?? null;
$nombreGrupo = trim($_POST['NombreGrupo'] ?? '');
$idGrado     = $_POST['IdGrado'] ?? null;
$ciclo       = trim($_POST['CicloEscolar'] ?? '');

if ($idGrupo && $nombreGrupo && $idGrado && $ciclo) {
    if ($grupoModel->editar($idGrupo, $nombreGrupo, $idGrado, $ciclo)) {
        echo "Grupo actualizado correctamente";
    } else {
        http_response_code(500);
        echo "Error al actualizar el grupo";
    }
} else {
    http_response_code(400);
    echo "Datos incompletos";
}
