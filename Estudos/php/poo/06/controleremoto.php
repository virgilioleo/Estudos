<?php 
require_once 'controlador.php';
//in_array("your-interface", class_implements($object_or_class_name));
//class_implements(object|string $object_or_class, bool $autoload = true): array|false
//class_implements();
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct() {
       $this->volume = 50;
       $this->ligado = false; 
       $this->tocando = false;
    }
    private function getVolume (){
        return $this->volume;
    }
    private function getLigado (){
        return $this->ligado;
    }
    private function getTocando (){
        return $this->tocando;
    }
    private function setVolume ($volume){
        $this->volume = $volume;
    }
    private function setLigado ($ligado){
        $this->ligado = $ligado;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br> Está ligado?: " . ($this->getLigado() ? "sim" : "não");
        echo "<br> Está tocando?: " . ($this->getTocando() ? "sim" : "não");
        echo "<br> Volume: " . $this->getVolume();
        for ($i=0; $i <= $this->getVolume(); $i +=10){
            echo "|";
            echo "</br>";
        }
    }
    public function fecharMenu(){
        echo "<br> Fechar menu";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "desligado";
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() >0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() ==0){
            $this->setVolume(10);
        }
    }
    public function play(){
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    










}


?>