<?php 
require_once 'Pessoa3.php';
class Aluno2 extends Pessoa3 {
    private int $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "<p> Mensalidade Paga </p>";
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