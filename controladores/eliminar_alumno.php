<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';
require_once '../clases/AsignacionAlumnoGrupo.php';

$alumnoModel     = new Alumno($conn);
$asignacionModel = new AsignacionAlumnoGrupo($conn);

$idAlumno = $_POST['IdAlumno'] ?? null;
$idGrupo  = $_POST['IdGrupo'] ?? null;

if ($idAlumno && $idGrupo) {
    // Primero eliminar asignación
    if ($asignacionModel->eliminarAsignacion($idAlumno, $idGrupo)) {
        // Luego eliminar alumno
        if ($alumnoModel->eliminar($idAlumno)) {
            echo "Alumno eliminado correctamente";
        } else {
            echo "Error al eliminar alumno";
        }
    } else {
        echo "Error al eliminar asignación del alumno";
    }
} else {
    echo "Datos incompletos";
}
