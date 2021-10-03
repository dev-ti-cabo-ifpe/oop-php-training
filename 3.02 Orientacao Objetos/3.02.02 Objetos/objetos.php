<?php
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos  = new Pessoa();
$carlos->Codigo = 10;
$carlos->Nome = 'Carlos da Silva';
$carlos->Algura =1.85;
$carlos->Nascimento ='10/04/1976';
$carlos->Escolaridade ='Ensino Medio';

echo "Manipulando o objeto $carlos->Nome : \n";
echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} \n";
$carlos->Formar('Tecnico em Eletrecidade') ;
echo "{$carlos->Nome} é formado em : {$carlos->Escolaridade} \n";

echo "{$carlos->Nome} possui : {$carlos->Idade} anos \n";
$carlos->Envelhecer(1) ;
echo "{$carlos->Nome} possui : {$carlos->Idade} anos \n";


$conta_carlos  = new Conta();
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = 'CC.1234.56';
$conta_carlos->DataDeCriacao ="10/07/02";
$conta_carlos->Titular =$carlos;
$conta_carlos->Senha =9876;
$conta_carlos->Saldo =567.89;
$conta_carlos->Cancelada =false;

echo "\n";
echo "Manipulando o conta de: {$conta_carlos->Titular->Nome}: \n";
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";
$conta_carlos->Depositar(20);
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";
$conta_carlos->Retirar(10);
echo "O Saldo atual é R\S: {$conta_carlos->ObterSaldo()}: \n";

?>
