<?php
//Iniciar nomes de classes com letras maisculas
//Evitar a utilizacao de carectere '_'
class Produto{
	var $Codigo;
	var $Descricao;
	private $Preco;
	var $Quantidade;
	const MARGEM = 10;
	
	function __construct ($Codigo, $Descricao,$Quantidade, $Preco){
		$this->Codigo = $Codigo;
		$this->Descricao = $Descricao;
		$this->Quantidade = $Quantidade;
		$this->Preco = $Preco;
		
	}
	
	function __get($propriedade){
		echo "Obtendo o valor de '$propriedade': \n";
		if ($propriedade == 'Preco'){
			return $this->$propriedade * (1+ (self::MARGEM/100));
		}
		
	}
	
	function __call($metodo, $parametros){
		echo "Voce executou o metodo: {$metodo} \n";
		foreach ($parametros as $key => $parametro){
			echo "\tParametro $key : $parametro \n";
		}
		
	}
	
	function ImprimeEtiqueta(){
		print 'Codigo ' . $this->Codigo . "\n";
		print 'Descrição ' . $this->Descricao . "\n";
	}
}
?>