<?php 
class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function __construct ($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }

    public function tampar(){
        $this->tampada = true;
    }
}
?>