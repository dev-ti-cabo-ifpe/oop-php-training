<?php


include_once 'IAluno.class.php';

class Aluno implements IAluno{
	function setNome($nome){
		 $this->nome = $nome;
	}
	
	function getNome(){
		return $this->nome;
	}
}

?>