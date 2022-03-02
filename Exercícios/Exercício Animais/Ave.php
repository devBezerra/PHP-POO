<?php 
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function locomover(){
        echo "<p> Voando </p>";
    }

    public function alimentar() {
        echo "<p> Comendo Frutas </p>";
    }

    public function emitirSom(){
        echo "<p> Som de Ave </p>";
    }

    public function fazerNinho(){
        echo "<p> Construindo um Ninho </p>";
    }


    //Getters and Setters
    public function getCorPena(){
        return $this->corPena;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
}
?>