<?php

include_once 'Conta.class.php';
final class ContaPoupanca extends Conta {
	var $Aniversario;
	
	function __construct ($Agencia,$Codigo,$DataDeCriacao,$Titular, $Senha, $Saldo,$Aniversario){
		parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular, $Senha, $Saldo);
		$this->Aniversario = $Aniversario;
	}
	
	function Retirar($quantia){
		if ($this->Saldo > $quantia){
			parent::Retirar($quantia) ;
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