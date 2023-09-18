<?php 
class contabanco {
    public $NumConta;
    protected $Tipo;
    private $Dono;
    private $Saldo;
    private $Status;

    public function abrirConta ($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }
        }
    
    public function fecharConta (){
        if ($this->getSaldo() > 0){
            echo "<p>Existe saldo</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Negativo</p>";
        } else {
            $this->setStatus(false);
            echo "<p>" .$this->getDono(). " sua conta está fechada</p>";
        }
    }
    public function depositar($v){
        if ($this->getStatus()){
        $this->setSaldo($this->getSaldo() + $v);
        echo "<p>Depósito efetivado de $v " .$this->getDono()."</p>";
        } else {
            echo "Conta Encerrada";
        }
    }
    public function sacar ($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque autorizado de $v " .$this->getDono(). "</p>";
            } else {
                echo "<p>Saldo insuficiente </p>";
            }
        } else {
            echo "<p>Conta fechada</p>";
        }
    }
    public function mensalidade (){
        if ($this->getTipo()  == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Débito mensalidade de $v efetivado " .$this->getDono()."</p>";
        }   else {
                echo "<p>Problemas com a conta</p>";
        }
    }
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada co sucesso</p>"; 
    }
    public function getNumConta(){
        return $this->NumConta;
    }
    public function setNumConta($conta){
        $this->NumConta = $conta;
    }
    public function getTipo(){
        return $this->Tipo;
    }
    public function setTipo($tipo){
        $this->Tipo = $tipo;
    }
    public function getDono(){
        return $this->Dono;
    }
    public function setDono($dono){
        $this->Dono = $dono;
    }
    public function getSaldo(){
        return $this->Saldo;
    }
    public function setSaldo($saldo){
        $this->Saldo = $saldo;
    }
    public function getStatus(){
        return $this->Status;
    }
    public function setStatus($status){
        $this->Status = $status;
    }


    }






?>