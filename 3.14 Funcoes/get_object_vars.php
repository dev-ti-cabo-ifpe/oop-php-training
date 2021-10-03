<?php

class Funcionario{
	var $Codigo;
	var $Nome;
	var $Salario = 586;
	var $Departamento = 'Contabilidade';
	
	function SetSalario(){
		
	}
	function GetSalario(){
		
	}

}

$jose = new Funcionario;

print_r(get_object_vars($jose));
?>
