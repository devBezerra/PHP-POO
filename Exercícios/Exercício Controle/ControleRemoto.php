<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        if ($this->getLigado()){
            echo $this->getLigado() , "<br>";
            echo $this->getVolume();
            for ($i=0 ; $i <= $this->getVolume(); $i = $i + 10){
                echo "|";
            }
        }
    }

    public function fecharMenu(){
        echo "Menu Fechado";
    }

    public function maisVolume(){
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() + 1);
            echo $this->getVolume();
            for ($i=0 ; $i <= $this->getVolume(); $i = $i + 10){
                echo "|";
            }
        }
    }

    public function menosVolume(){
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 1);
            echo $this->getVolume();
            for ($i=0 ; $i <= $this->getVolume(); $i = $i + 10){
                echo "|";
            }
        }
    }

    public function ligarMudo() {
        if($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if($this->getLigado() and $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado() and $this->getTocando() == false) {
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() and $this->getTocando()) {
            $this->setTocando(false);
        }
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($volume){
        $this->volume = $volume;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
}

?>