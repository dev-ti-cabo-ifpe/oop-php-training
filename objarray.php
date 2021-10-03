<?php

$willian['nome'] = 'Willian Scatola';
$willian['idade'] = 22;
$willian['profissao'] = 'Controle Estoque';

$daline['nome'] = 'Daline';
$daline['idade'] = 21;
$daline['profissao'] = 'Almoxarifado';

foreach($willian as $chave => $valor){
	$w->$chave = $valor;
}

foreach($daline as $chave => $valor){
	$d->$chave = $valor;
}

echo "{$w->nome} é {$w->profissao} \n";
echo "{$d->nome} é {$d->profissao} \n";

?>
