<?php 
require_once 'Pessoa2.php';
class Aluno extends Pessoa2 {
    private $matricula;
    private $curso;

    public function cancelarMatric() {
        echo "<h3> Matrícula Cancelada </h3>";
    }

    //Getters and Setters
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}
?>