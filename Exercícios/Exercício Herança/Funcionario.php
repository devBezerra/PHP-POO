<?php 
require_once 'Pessoa2.php';
class Funcionario extends Pessoa2 {
    private $setor;
    private $trabalhando;

    public function mudarTrabalho() {
        $this->setTrabalhando(!$this->getTrabalhando());
    }

    //Getters and Setters
    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }
}
?>