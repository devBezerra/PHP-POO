<?php 
require_once 'Pessoaa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private $leitor;

    public function __construct($ti, $au, $tot, $lei) {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($tot);
        $this->setLeitor($lei);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }

    public function mostrarDetalhes() {
        echo "<hr>";
        echo "<h1> {$this->getTitulo()} </h1>";
        echo "<h2> Escrito por {$this->getAutor()} </h2>";
        echo "<h2> Total de Páginas: {$this->getTotPaginas()} </h2>";
        echo "<h2> Página Atual: {$this->getPagAtual()} </h2>";
        if($this->getAberto()) {
            echo "<h2> Aberto </h2>";
        } else {
            echo "<h2> Fechado </h2>";
        }
        echo "<h2> Leitor: {$this->getLeitor()->getNome()} </h2>";
        echo "<hr>";
    }
    
    //Abstracts Methods
    public function abrir() {
        $this->setAberto(true);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if($this->getAberto() && $p < $this->getTotPaginas()){
            $this->setPagAtual($p);
        } else {
            echo "<p> Primeiro abra o Livro </p>";
        }
    }

    public function avancarPag() {
        if($this->getAberto() && $this->getPagAtual() < $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo "<p> Primeiro abra o Livro </p>";
        }
    }

    public function voltarPag() {
        if($this->getAberto() && $this->getPagAtual() != 0){
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "<p> Primeiro abra o Livro </p>";
        }
    }

    //Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
}
?>