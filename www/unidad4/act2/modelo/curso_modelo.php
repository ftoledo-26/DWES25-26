<?php

use LDAP\Result;

class curso_modelo {
    public $conn;
    public function __construct(PDO $pdo){
        $this->conn = $pdo; 
    }
    
    public function agregar(string $nombre): int{
        $sql = "INSERT INTO cursos(nombre) VALUES(:nombre)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->execute();

    // Retorna el último ID insertado
    return (int)$this->conn->lastInsertId();    
    }
    public function idPorNombre(int $id) :?int{
        $sql = "SELECT * FROM cursos WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam("id",$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result ? $result['id'] : null;
    }
    public function todos():array{
        $array = [];
        $sql="SELECT * FROM cursos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetch();
        return $array;
    }
    public function variar() : void{
        $sql = "DELETE FROM cursos";
        $stmt = $this->conn->prepare($sql);
        $stmt-> execute();
    }
}
?>