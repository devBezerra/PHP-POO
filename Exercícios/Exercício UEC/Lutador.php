<?php 
class Lutador {
    private $nome;
    private $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
       $this->setNome($no);
       $this->setNacionalidade($na);
       $this->setIdade($id);
       $this->setAltura($al);
       $this->setPeso($pe);
       $this->setCategoria();
       $this->setVitorias($vi);
       $this->setDerrotas($de);
       $this->setEmpates($em);

    }

    public function apresentar() {
        echo "Lutador: ", $this->getNome(), "<br>";
        echo "Origem: ", $this->getNacionalidade(), "<br>";
        echo $this->getIdade(), " anos <br>";
        echo $this->getAltura(), " m de altura <br>";
        echo "Pesando: ", $this->getPeso(), "<br>";
        echo "Ganhou: ", $this->getVitorias(), "<br>";
        echo "Perdeu: ", $this->getDerrotas(), "<br>";
        echo "Empatou: ", $this->getEmpates(), "<br>";
    }

    public function status() {
        echo $this->getNome(), "<br>";
        echo "é um peso", $this->getCategoria(), "<br>";
        echo $this->getVitorias(), " Vitórias <br>";
        echo $this->getDerrotas(), " Derrotas <br>";
        echo $this->getEmpates(), " Empates <br>";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setDerrotas($this->getEmpates() + 1);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria() {
        if($this->getPeso() >= 52.2 and $this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

}
?>