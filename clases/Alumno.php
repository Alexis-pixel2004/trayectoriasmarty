<?php
class Alumno {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

public function insertarYObtenerId($nombre, $apellido, $sexo, $fechaNacimiento, $curp) {
    $sql = "INSERT INTO tb_alumnos (Nombre, Apellido, Sexo, FechaNacimiento, CURP) 
            VALUES (:nombre, :apellido, :sexo, :fecha, :curp)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':fecha', $fechaNacimiento);
    $stmt->bindParam(':curp', $curp);

    if ($stmt->execute()) {
        return $this->conn->lastInsertId();
    }
    return false;
}
public function listarPorGrupo($idGrupo) {
        $sql = "SELECT a.IdAlumno, a.Nombre, a.Apellido, a.Sexo, a.FechaNacimiento, a.CURP
                FROM tb_alumnos a
                INNER JOIN tb_asignacionalumnogrupo ag ON a.IdAlumno = ag.IdAlumno
                WHERE ag.IdGrupo = :idGrupo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idGrupo', $idGrupo, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Eliminar alumno (solo de tb_alumnos)
    public function eliminar($idAlumno) {
        $sql = "DELETE FROM tb_alumnos WHERE IdAlumno = :idAlumno";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idAlumno', $idAlumno, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function actualizar($datos) {
    $sql = "UPDATE tb_alumnos SET 
              Nombre = ?, 
              Apellido = ?, 
              Sexo = ?, 
              FechaNacimiento = ?, 
              CURP = ?
            WHERE IdAlumno = ?";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([
        $datos['Nombre'],
        $datos['Apellido'],
        $datos['Sexo'],
        $datos['FechaNacimiento'],
        $datos['CURP'],
        $datos['IdAlumno']
    ]);
}


}
