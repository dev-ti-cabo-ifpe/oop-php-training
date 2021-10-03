<?php

include_once 'Conta.class.php';
include_once 'ContaCorrente.class.php';

class ContaEspecial extends ContaCorrente{
	function Depositar($Valor){
		echo "Sobrescrevendo método Depositar. \n";
		parent::Depositar($Valor);
	}
	
	function Transferir($Conta, $Valor){
		echo "Sobrescrevendo método Transferir. \n";
		parent::Tranferir($Conta, $Valor);
	}
}
?>