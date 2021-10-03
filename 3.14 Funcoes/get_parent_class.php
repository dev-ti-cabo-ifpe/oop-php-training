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
class Estagiario extends Funcionario{
	var $Salario;
	var $Bolsa;
}

$jose = new Estagiario;

echo get_parent_class($jose);
echo get_parent_class('estagiario');
?>
