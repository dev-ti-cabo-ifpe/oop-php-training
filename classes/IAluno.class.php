<?php



interface IAluno {
	function getNome();
	function setNome($nome);
	function setResponsavel(Pessoa $responsavel);
	
}

?>