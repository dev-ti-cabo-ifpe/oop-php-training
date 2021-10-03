<?php
//Iniciar nomes de classes com letras maisculas
//Evitar a utilizacao de carectere '_'
class Pessoa{
	var $Codigo;
	var $Nome;
	var $Altura;
	var $Nascimento;
	var $Idade;
	var $Escolaridade;
	var $Salario;
	
	function __construct ($Codigo,$Nome,$Altura,  $Idade,$Nascimento, $Escolaridade, $Salario){
		$this->Codigo =$Codigo;
		$this->Nome = $Nome;
		$this->Altura =$Altura;
		$this->Nascimento =$Nascimento;
		$this->Idade =$Idade;
		$this->Escolaridade =$Escolaridade;
		$this->Salario =$Salario;
	}
	
	function Crescer($centimetros){
		if ($centimetros > 0){
			$this->Altura += $centimentros;
		}
	}
	
	function Formar($titulacao){
			$this->Escolaridade = $titulacao;
	}
	
	function Envelhecer($anos){
		if ($anos > 0){
			$this->Idade += $anos;
		}
			
	}
	
	function __destruct(){
		echo "Objeto {$this->Nome} finalizando...\n";
	}
}
?>