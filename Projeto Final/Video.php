<?php 
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private float $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;

    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function play() {
        echo "<p> Reproduzindo! </p>";
        if(!$this->reproduzindo) {
            $this->setReproduzindo(true);
        }
    }

    public function pause() {
        echo "<p> Pausado! </p>";
        if($this->reproduzindo) {
            $this->setReproduzindo(false);
        }
    }

    public function like() {
        echo "<p> Deu Like! </p>";
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    //Getters and Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao) /2;
        $this->avaliacao = $media;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

}
?>