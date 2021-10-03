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

if (is_subclass_of($jose, 'Funcionario')){
	echo "Classe Objeto Jose é derivada de Funcionario";
}


if (is_subclass_of('Estagiario', 'Funcionario')){
		echo "Classe Estagiariao é derivada de Funcionario";
}

#echo get_parent_class('estagiario');
?>
