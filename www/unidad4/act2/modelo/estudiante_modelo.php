<?php 
class estudiante_modelo{
    private $conn;
    public function __construct(PDO $pdo)
    {   
        $this->conn = $pdo;
    }
    public function agregar(string $nombre, int $edad, ?int $cursoId):int{
        $sql = "INSERT INTO estudiantes(nombre, edad, curso_id)Values(:nombre, :edad, :curso_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":edad", $edad);
        $stmt->bindParam(":curso_id", $cursoId);
        $stmt = $stmt->execute();
        return (int)$this->conn->lastInsertId(); 
    }
    public function actualizarPorNombre(string $nombreActual, string $nuevoNombre,
                                                int $nuevaEdad,int $nuevoCurso):int{
        $sql = "UPDATE estudiantes 
                SET nombre = :nombreNuevo, edad = :edad, curso_id = :curso_id
                WHERE nombre = :nombre;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombreActual);
        $stmt->bindParam(":edad", $nuevaEdad);
        $stmt->bindParam(":curso_id", $nuevoCurso);
        $stmt->bindParam(":nombreNuevo", $nuevoNombre);
        $stmt->execute();
        return (int)$this->conn->lastInsertId(); 
    }
    public function eliminarPorNombre(string $nombre):void{
        $sql ="DELETE FROM estudiantes WHERE nombre = :nombre";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->execute();
    }
    public function conCurso():array{
        $sql = "SELECT e.id, e.nombre, e.edad, e.curso_id FROM estudiantes e
                LEFT JOIN cursos C ON  e.curso_id = C.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function vaciarTodo():void{
        $sql = "DELETE FROM estudiantes";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $sqlReset = "ALTER TABLE estudiantes AUTO_INCREMENT = 1";
        $stmtReset = $this->conn->prepare($sqlReset);
        $stmtReset->execute();
    }
}
?>