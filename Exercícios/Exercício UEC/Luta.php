<?php 
require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria() and $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            echo "Essa luta não pode acontecer";
        }
    }

    public function lutar(){
        if($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0:
                    echo "<p> Empate <p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;

                case 1:
                    echo "<p> Vitória de </p> . {$this->getDesafiado()->getNome()}";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;

                case 2:
                    echo "<p> Vitória de </p> . {$this->getDesafiante()->getNome()}";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
            }
        }
    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
}
?>