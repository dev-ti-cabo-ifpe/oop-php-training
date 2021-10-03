<?php

include_once 'Funcionario.class.php';

class Estagiario extends Funcionario{
	
	
	function GetSalario(){
		return $this->Salario * 1.12;
	}
	
	function __destruct(){
		echo "Objeto {$this->Nome} finalizando...\n";
	}
}
?>