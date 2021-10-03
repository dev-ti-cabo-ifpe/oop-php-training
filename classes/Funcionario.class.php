<?php


class Funcionario{
	private $Codigo;
	public  $Nome;
	private $Nascimento;
	#private $Salario;
	protected $Salario;
	
	/*function __construct ($Codigo,$Nome, $Nascimento, $Salario){
		$this->Codigo =$Codigo;
		$this->Nome = $Nome;
		$this->Nascimento =$Nascimento;
		$this->Salario =$Salario;
	}*/
	
	function SetSalario($Salario){
		if (is_numeric($Salario) and ($Salario >0)){
			$this->Salario = $Salario;
		}
	}
	
	function GetSalario(){
		return $this->Salario;
	}
	
	function __destruct(){
		echo "Objeto {$this->Nome} finalizando...\n";
	}
}
?>