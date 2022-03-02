<?php 
require_once 'Pessoa2.php';
class Professor extends Pessoa2 {
    private $especialidade;
    private $salario;

    public function receberAum($aum) {
        $this->setSalario($this->getSalario() + $aum);
    }

    //Getters and Setters
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
?>