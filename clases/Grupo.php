<?php
class Grupo {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

 
    public function insertar($nombreGrupo, $idGrado, $cicloEscolar, $idDocente) {
        $sql = "INSERT INTO tb_grupos (NombreGrupo, IdGrado, CicloEscolar, IdDocentePrincipal)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombreGrupo, $idGrado, $cicloEscolar, $idDocente]);
    }

    public function listarPorDocente($idDocente) {
    $sql = "SELECT g.IdGrupo, g.NombreGrupo, g.CicloEscolar, gr.NombreGrado, gr.Nivel
            FROM tb_grupos g
            INNER JOIN tb_grados gr ON g.IdGrado = gr.IdGrado
            WHERE g.IdDocentePrincipal = :idDocente";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':idDocente', $idDocente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function eliminar($idGrupo, $idDocente) {
        $sql = "DELETE FROM tb_grupos WHERE IdGrupo = ? AND IdDocentePrincipal = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$idGrupo, $idDocente]);
    }

    
    public function existeGrupo($nombreGrupo, $cicloEscolar, $idDocente) {
        $sql = "SELECT 1 FROM tb_grupos
                WHERE NombreGrupo = ? AND CicloEscolar = ? AND IdDocentePrincipal = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$nombreGrupo, $cicloEscolar, $idDocente]);
        return $stmt->fetch() !== false;
    }
    public function obtenerPorId($idGrupo) {
    $sql = "SELECT * FROM tb_grupos WHERE IdGrupo = :idGrupo";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':idGrupo', $idGrupo, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function editar($idGrupo, $nombreGrupo, $idGrado, $ciclo) {
    $sql = "UPDATE tb_grupos 
            SET NombreGrupo = :nombreGrupo, IdGrado = :idGrado, CicloEscolar = :ciclo 
            WHERE IdGrupo = :idGrupo";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':nombreGrupo', $nombreGrupo);
    $stmt->bindParam(':idGrado', $idGrado, PDO::PARAM_INT);
    $stmt->bindParam(':ciclo', $ciclo);
    $stmt->bindParam(':idGrupo', $idGrupo, PDO::PARAM_INT);
    return $stmt->execute();
}

}
