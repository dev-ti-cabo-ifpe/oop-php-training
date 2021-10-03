<?php

include_once 'Pessoa.class.php';
include_once 'Conta.class.php';
include_once 'ContaPoupanca.class.php';

$carlos  = new Pessoa(10, 'Carlos da Silva', 1.85, 25,  '10/04/1976', 'Ensino Medio', 650.00);

echo "Manipulando o objeto $carlos->Nome : \n";

$conta = new ContaPoupanca(6678,'PP.1234.57',"10/07/02",$carlos, 9876,500.00,  '10/07');

?>