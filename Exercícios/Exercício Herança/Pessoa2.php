<?php 
class Pessoa2 {
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniv() {
        $this->setIdade($this->getIdade() + 1);
    }

    //Getters and Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}
?>