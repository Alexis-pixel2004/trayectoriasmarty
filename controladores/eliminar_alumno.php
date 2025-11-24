<?php
session_start();
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
            http_response_code(500);
            echo "Error al eliminar alumno";
        }
    } else {
        http_response_code(500);
        echo "Error al eliminar asignación del alumno";
    }
} else {
    http_response_code(400);
    echo "Datos incompletos";
}
