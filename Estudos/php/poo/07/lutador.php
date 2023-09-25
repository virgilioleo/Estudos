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
    
    //metod
    public function apresentar(){

    }
    public function status(){

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