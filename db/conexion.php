<?php
// Datos de conexión
$host = "localhost";
$dbname = "db_trayectoria";   
$user = "root";               
$pass = "";                   

// Conexión con PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
