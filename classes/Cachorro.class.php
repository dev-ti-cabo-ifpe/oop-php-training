<?php

class Cachorro{
	private $Nascimento;
		
		
	/*function __construct ($nome){
		$this->nome = $nome;
		
	}*/
	
	function __construct($coleira, $nome, $idade, $raca){
		$this->coleira = $coleira;
		$this->nome = $nome;
		$this->idade = $idade;
		$this->raca = $raca;
		
	}
	
	function __set($propriedade, $valor){
		if ($propriedade == 'Nascimento'){
			if(count(explode('/', $valor)) == 3){
					echo "Dado '$valor', atribuido a '$propriedade' \n";
					$this->$propriedade = $valor;
			}else{
				echo "Dado '$valor', nao atribuido a '$propriedade' \n";
			}
		}else{
			$this->$propriedade = $valor;
		}
	}
	
	function __clone(){
		$this->coleira = $this->coleira+1;
		$this->nome = 'Junior';
		$this->idade  = 0;
	}
	
	function __tostring(){
		return $this->nome;
	}

}
?>