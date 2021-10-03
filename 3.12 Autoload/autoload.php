<?php

#include_once 'classes/Produto.class.php';

function __autoload($classe){
	include_once("classes/{$classe}.class.php");
	
}

$bolo = new Produto(500, 'Bolo de Fubá', 4, 4.12);
echo 'Codigo: ' . $bolo->Codigo . "\n";
echo 'Nome: ' . $bolo->Descricao . "\n";

?>