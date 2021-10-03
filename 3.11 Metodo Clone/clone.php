<?php

include_once 'classes/Cachorro.class.php';

$toto = new Cachorro(100, 'Totó', 10, 'Fox Terrier');
$vava = clone $toto;

echo 'Codigo: ' . $toto->coleira . "\n";
echo 'Nome: ' . $toto->nome . "\n";
echo 'Idade: ' . $toto->idade . "\n";

echo "\n";
echo 'Codigo: ' . $vava->coleira . "\n";
echo 'Codigo: ' . $vava->nome . "\n";
echo 'Codigo: ' . $vava->idade . "\n";

?>