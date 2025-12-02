<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

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
        echo "Error al registrar el grupo";
    }
}
