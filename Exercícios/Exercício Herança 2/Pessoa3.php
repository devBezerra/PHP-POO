<?php 
abstract class Pessoa3{
    private $nome;
    private int $idade;
    private $sexo;

    public final function fazerAniversario() { //Esse método não poderá ser sobrescrito
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