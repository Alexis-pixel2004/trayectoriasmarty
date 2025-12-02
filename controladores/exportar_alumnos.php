<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Alumno.php';
require '../vendor/autoload.php'; // PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Validar grupo recibido
$idGrupo = $_GET['IdGrupo'] ?? null;
if (!$idGrupo) {
    echo "Grupo no especificado";
    exit;
}

// Obtener alumnos del grupo
$alumnoModel = new Alumno($conn);
$alumnos = $alumnoModel->listarPorGrupo($idGrupo);

// Crear hoja de cálculo
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Grupo $idGrupo");

// Encabezados
$encabezados = ['Nombre', 'Apellido', 'Sexo', 'Fecha Nacimiento', 'CURP'];
$columna = 'A';
foreach ($encabezados as $titulo) {
    $sheet->setCellValue($columna . '1', $titulo);
    $columna++;
}

// Datos
$fila = 2;
foreach ($alumnos as $a) {
    $sheet->setCellValue("A{$fila}", $a['Nombre']);
    $sheet->setCellValue("B{$fila}", $a['Apellido']);
    $sheet->setCellValue("C{$fila}", $a['Sexo']);
    $sheet->setCellValue("D{$fila}", $a['FechaNacimiento']);
    $sheet->setCellValue("E{$fila}", $a['CURP']);
    $fila++;
}

// Estilos básicos
$sheet->getStyle('A1:E1')->getFont()->setBold(true);
foreach (range('A', 'E') as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Descargar archivo
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=alumnos_grupo{$idGrupo}.xlsx");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
