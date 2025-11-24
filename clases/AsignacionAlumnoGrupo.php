<?php
class AsignacionAlumnoGrupo {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function asignar($idAlumno, $idGrupo) {
        $sql = "INSERT INTO tb_asignacionalumnogrupo (IdAlumno, IdGrupo) 
                VALUES (:idAlumno, :idGrupo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idAlumno', $idAlumno, PDO::PARAM_INT);
        $stmt->bindParam(':idGrupo', $idGrupo, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Eliminar asignación alumno-grupo
    public function eliminarAsignacion($idAlumno, $idGrupo) {
        $sql = "DELETE FROM tb_asignacionalumnogrupo 
                WHERE IdAlumno = :idAlumno AND IdGrupo = :idGrupo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idAlumno', $idAlumno, PDO::PARAM_INT);
        $stmt->bindParam(':idGrupo', $idGrupo, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
