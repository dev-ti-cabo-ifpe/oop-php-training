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
print_r(get_class_vars("Funcionario"));
?>
