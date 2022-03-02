<?php 
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
        $this->getEspectador()->setTotalAssistido($this->getEspectador()->getTotalAssistido() + 1);
    }

    public function avaliar() { 
        $this->getFilme()->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->getFilme()->setAvaliacao($nota);
    }

    public function avaliarPorcentagem($porc){
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50) {
            $nova = 5;
        } elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->getFilme()->setAvaliacao($nova);
    }
    
    
    //Getters and Setters
    public function getEspectador() {
        return $this->espectador;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
?>