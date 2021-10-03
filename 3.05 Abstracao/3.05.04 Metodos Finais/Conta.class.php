<?php
//Iniciar nomes de classes com letras maisculas
//Evitar a utilizacao de carectere '_'
abstract class Conta{
	var $Agencia;
	var $Codigo;
	var $DataDeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;
	
	function __construct ($Agencia,$Codigo,$DataDeCriacao,$Titular, $Senha, $Saldo){
		$this->Agencia =$Agencia;
		$this->Codigo = $Codigo;
		$this->DataDeCriacao =$DataDeCriacao;
		$this->Titular =$Titular;
		$this->Senha =$Senha;
		
		$this->Depositar($Saldo);
		$this->Cancelada = false;
	}
	
	function Retirar($quantia){
		if ($quantia > 0){
			$this->Saldo -= $quantia;
		}
	}
	
	function Depositar($quantia){
			$this->Saldo += $quantia;
	}
	
	function ObterSaldo(){
		return $this->Saldo;	
	}
	
	abstract function Transferir($Conta, $Valor);
	
	
	function __destruct(){
		echo "Objeto  Conta {$this->Codigo} de {$this->Titular->Nome}  finalizada...\n";
	}
}
?>