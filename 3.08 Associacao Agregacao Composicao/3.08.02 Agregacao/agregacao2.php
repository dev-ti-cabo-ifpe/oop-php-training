<?php

include_once 'classes/Fornecedor.class.php';
include_once 'classes/Cesta.class.php';
include_once 'classes/Produto.class.php';

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Alimentos S.A.' ;
$fornecedor->Endereco = "Rua Ipiranga";
$fornecedor->Cidade = 'Poços de Calda';


$cesta = new Cesta;
$cesta->Adicionaltem($fornecedor);


echo $cesta->CalculaTotal();
echo "\n";
echo $cesta->ExibeLista();

?>
