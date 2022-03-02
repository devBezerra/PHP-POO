<?php 
require_once 'Aluno2.php';
final class Bolsista extends Aluno2 {
    private float $bolsa;

    public function renovarBolsa() {
        echo "<p> Bolsa Renovada com Sucesso </p>";
    }
 
    public function pagarMensalidade() {
        echo "<p> {$this->getNome()} é bolsista! Então paga com desconto </p>";
    }

    //Getters and Setters
    public function getBolsa() {
        return $this->Bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

}
?>