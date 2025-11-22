<?php
class Docente {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Registrar docente
    public function registrar($nombre, $apellido, $usuario, $password, $especialidad) {
        $sql = "INSERT INTO tb_docentes (Nombre, Apellido,Usuario, Contraseña, Especialidad)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nombre, $apellido, $usuario, $hash, $especialidad]);
    }

    // Validar login
    public function autenticar($usuario, $password) {
        $sql = "SELECT * FROM tb_docentes WHERE Usuario = ? LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$usuario]);
        $docente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($docente && password_verify($password, $docente['Contraseña'])) {
            return $docente;
        }
        return false;
    }
}
?>
