<?php
session_start();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


require_once '../db/conexion.php';
require_once '../clases/Grupo.php';


$grupoModel = new Grupo($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreGrupo = trim($_POST['NombreGrupo'] ?? '');
    $idGrado     = $_POST['IdGrado'] ?? null;
    $ciclo       = trim($_POST['CicloEscolar'] ?? '');
    $idDocente   = $_SESSION['id_docente'] ?? null;
   
   
    if ($grupoModel->insertar($nombreGrupo, $idGrado, $ciclo, $idDocente)) {
        echo "Grupo registrado correctamente".$idDocente;
    } else {
        http_response_code(500);
        echo "Error al registrar el grupo";
    }
}
