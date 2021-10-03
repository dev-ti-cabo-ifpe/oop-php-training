<?php

class Funcionario{
	var $Codigo;
	var $Nome;
	var $Salario = 586;
	var $Departamento = 'Contabilidade';
	
	function SetNome(){
		
	}
	function GetNome(){
		
	}

}
class Estagiario extends Funcionario{
	var $Salario;
	var $Bolsa;
}

$jose = new Estagiario;

if (method_exists($jose, 'SetNome')){
	echo "Classe Objeto Jose possui metodo SetNome";
}


if (method_exists($jose, 'GetNome')){
		echo "Classe Objeto Jose possui é metodo GetNome";
}

?>

