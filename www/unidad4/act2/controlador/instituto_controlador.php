<?php 
class instituto_controlador{
    private $estudiante;
    private $curso;
    public function __construct(estudiante_modelo $estudiante, curso_modelo $curso)
    {   
        $this->estudiante = $estudiante;
        $this->curso = $curso;
    }
    public function ejecutar():array{
        $data =[];
        $this->curso->agregar("ciberseguridad");
        $this->curso->agregar("Programación Web");
        
        $array_curso = $this->curso->todos();
        
        $this->estudiante->agregar("Ana Pérez", 20,1);
        $this->estudiante->agregar("Luis Gómez", 22,2);

        $array_estudiantes = $this->estudiante->conCurso();

        $this->estudiante->actualizarPorNombre("Ana Pérez", "Ana Pérez", 21,2);

        $array_estudiantes_mod = $this->estudiante->conCurso();
        $this->estudiante->eliminarPorNombre("Luis Gómez");
        $arrayFinal = $array_estudiantes_mod = $this->estudiante->conCurso();
        $data = [
            'cusos' => $array_curso,
            'listaIni' => $array_estudiantes,
            'listaMod' => $array_estudiantes_mod,
            'listaFin' => $arrayFinal
        ];
        $this->estudiante->vaciarTodo();
        $this->curso->variar();
        
        return $data;
    }
}
?>