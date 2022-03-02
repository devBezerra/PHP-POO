<?php 
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct($numConta, $dono) {
        $this->setnumConta($numConta);
        $this->setDono($dono);
        $this->setSaldo(0);
        $this->setStatus(false);
    }


    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipo($tipo);

        if ($this->getTipo() == "CC") {
            $this->setSaldo(50);
            echo "Conta Corrente aberta com Sucesso. Saldo inicial: {$this->getSaldo()},00 reais <br>";
        } elseif($this->getTipo()  == "CP") {
            $this->setSaldo(150);
            echo "Conta Poupança aberta com Sucesso. Saldo inicial: {$this->getSaldo()},00 reais <br>";
        } else {
            echo "Não foi possível criar sua conta <br>";
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
            echo "Conta de {$this->getDono()} encerrada com Sucesso <br>";
        } else {
            echo "Não foi possível fechar sua conta <br>";
        }
    }

    public function depositar($deposito){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $deposito);
            echo "Depósito realizado com Sucesso. Novo saldo: {$this->getSaldo()},00 reais <br>";
        } else {
            echo "Não foi possível realizar o depósito <br>";
        }
    }

    public function sacar($saque){
        if ($this->getStatus() and $this->getSaldo() >= $saque) {
            $this->setSaldo($this->getSaldo() - $saque);
            echo "Saque realizado com Sucesso. Novo saldo: {$this->getSaldo()},00 reais <br>";
        } else {
            echo "Não foi possível realizar o Saque <br>";
        }
    }

    public function pagarMensalidade(){
        if ($this->getTipo() == "CC") {
            $this->setSaldo($this->getSaldo() - 12);
        } else if ($this->getTipo() == "CP") {
            $this->setSaldo($this->getSaldo() - 20);
        } else {
            return;
        }
    }


    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}


?>