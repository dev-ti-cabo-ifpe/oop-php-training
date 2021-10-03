<?php
include_once 'classes/Cesta.class.php';
include_once 'classes/Produto.class.php';

$produto = new Produto;
$produto->Codigo = 462;
$produto->Preco = 1.24;
$produto->Descricao = "Doce de Pêssego" ;

$produto1 = new Produto;
$produto1->Codigo = 1;
$produto1->Preco = 1.40;
$produto1->Descricao = "Ameixa" ;

$produto2 = new Produto;
$produto2->Codigo = 2;
$produto2->Preco = 2.24;
$produto2->Descricao = "Morango" ;

$produto3 = new Produto;
$produto3->Codigo = 3;
$produto3->Preco = 2.86;
$produto3->Descricao = "Abacaxi" ;

$cesta = new Cesta;
$cesta->Adicionaltem($produto);
$cesta->Adicionaltem($produto1);
$cesta->Adicionaltem($produto2);
$cesta->Adicionaltem($produto3);

echo $cesta->CalculaTotal();
echo "\n";
echo $cesta->ExibeLista();

?>
