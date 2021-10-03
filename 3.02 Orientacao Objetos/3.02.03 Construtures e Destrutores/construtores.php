<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos  = new Pessoa(10, 'Carlos da Silva', 1.85, 25,  '10/04/1976', 'Ensino Medio', 650.00);

echo "Manipulando o objeto $carlos->Nome : \n";
echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} \n";
$carlos->Formar('Tecnico em Eletricidade') ;
echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} \n";

echo "{$carlos->Nome} possui : {$carlos->Idade} anos \n";
$carlos->Envelhecer(1) ;
echo "{$carlos->Nome} possui : {$carlos->Idade} anos \n";


$conta_carlos  = new Conta(6677,'CC.1234.56',"10/07/02",$carlos,9876,567.89);

echo "\n";
echo "Manipulando o conta de: {$conta_carlos->Titular->Nome}: \n";
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";
$conta_carlos->Depositar(20);
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";
$conta_carlos->Retirar(10);
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";

?>
