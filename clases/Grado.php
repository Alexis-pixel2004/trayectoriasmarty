<?php
class Grado {
   private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

   
    public function listar() {
        $sql = "SELECT IdGrado, NombreGrado, Nivel FROM tb_grados ORDER BY IdGrado";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarTodos() {
        $sql = "SELECT IdGrado, NombreGrado, Nivel FROM tb_grados";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
