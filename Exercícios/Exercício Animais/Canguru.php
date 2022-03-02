<?php 
require_once 'Mamifero.php';
class Canguru extends Mamifero{

    public function locomover() {
        echo "<p> Pulando </p>";
    }

    public function usarBolsa() {
        echo "<p> Usando a Bolsa </p>";
    }
}
?>