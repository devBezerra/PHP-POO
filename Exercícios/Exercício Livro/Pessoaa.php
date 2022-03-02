<?php 
class Pessoa {
    private $nome;
    private int $idade;
    private $sexo;

    public function __construct($no, $id, $se) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }

    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }

    //Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
}
?>