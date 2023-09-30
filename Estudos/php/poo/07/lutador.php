<?php 
class lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias, $derrotas, $empates; //varios por linha
    
    //metod especiais
    function __construct($no, $nac, $id, $alt, $pe, $vit, $der, $emp)
    {
        $this->nome = $no;
        $this->nacionalidade = $nac;
        $this->idade = $id;
        $this->altura = $alt;
        $this->peso = $pe;
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empates = $emp;
    }

    //metod
    public function apresentar(){
        echo "<p>----------------------</p>";
        echo "Chegou a hora! O lutador " . $this->getNome();
        echo "Vindo de " . $this->getNacionalidade();
        echo "com " . $this->getIdade() . "anos e pesando " . $this->getPeso() . "KG";
        echo "<br> " . $this->getVitorias() . "vitorias";
        echo $this->getDerrotas() . "derrotas e " . $this->getEmpates() . "empates";
    }
    public function status(){
        echo "<p>----------------------</p>";
        echo "<p>" . $this->getNome() . "é um peso" . $this->getCategoria();
        echo "e já ganhou " . $this->getVitorias() . "perdeu " . $this->getDerrotas();
        echo "e empatou " . $this->getEmpates() . "vezes";
        }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }
    
    function getNome() {
		return $this->nome;
	}

	function setNome($nome) {
		$this->nome = $nome;
	}

    function getNacionalidade() {
		return $this->nacionalidade;
	}

	function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $$nacionalidade;
	}
	
    function getIdade() {
		return $this->idade;
	}

	function setIdade($idade) {
		$this->idade = $idade;
	}
    
    function getAltura() {
		return $this->altura;
	}

	function setAltura($altura) {
		$this->altura = $altura;
	}

    function getPeso() {
		return $this->peso;
	}

	function setPeso($peso) {
		$this->peso = $peso;
	}

    function getCategoria() {
		return $this->categoria;
	}

	function setCategoria($categoria) {
		$this->categoria = $categoria;
	}

    function getEmpates() {
		return $this->empates;
	}

	function setEmpates($empates) {
		$this->empates = $empates;
	}

    function getVitorias(){
        return $this->vitorias;
    }

    function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    
}


?>