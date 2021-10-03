<?php

include_once 'Conta.class.php';
class ContaCorrente extends Conta {
	var $Limite;
	
	function __construct ($Agencia,$Codigo,$DataDeCriacao,$Titular, $Senha, $Saldo, $Limite){
		parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular, $Senha, $Saldo);
		$this->Limite = $Limite;
	}
	
	function Retirar($quantia){
		$cpmf = 0.05;
		if ( ($this->Saldo + $this->Limite) >= $quantia){
			parent::Retirar($quantia);
			parent::Retirar($quantia *$cpmf) ;
		}else{
			echo "Retirada Não Permitida... \n";
			return false;
		}
		return true;
	}
	
	function Depositar($quantia){
			$this->Saldo += $quantia;
	}
	
	function ObterSaldo(){
		return $this->Saldo;	
	}
	
	function __destruct(){
		echo "Objeto  Conta {$this->Codigo} de {$this->Titular->Nome}  finalizada...\n";
	}
}
?>