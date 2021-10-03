<?php


class Cesta{
	private $itens;
	
	function Adicionaltem(Produto $item){
		$this->itens[] = $item;
	}
	function ExibeLista(){
		foreach($this->itens as $item){
			$item->ImprimeEtiqueta();
		}
	}
	function CalculaTotal(){
		$total = 0.0; 
		foreach($this->itens as $item){
			$total += $item->Preco;
		}
		return 'R$ '. $total;
	}
}
?>