<?php
include_once 'classes/Fornecedor.class.php';
include_once 'classes/Produto.class.php';

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Alimentos S.A.' ;
$fornecedor->Endereco = "Rua Ipiranga";
$fornecedor->Cidade = 'Poços de Calda';

$produto = new produto;
$produto->Codigo = 462;
$produto->Preco = 1.24;
$produto->Descricao = "Doce de Pêssego" ;
$produto->Fornecedor = $fornecedor;

echo 'Codigo : ' . $produto->Codigo . "\n" ;
echo 'Preco : ' . $produto->Preco . "\n" ;
echo 'Descricao : ' . $produto->Descricao . "\n" ;
echo 'Fornecedor : ' . $produto->Fornecedor->RazaoSocial . "\n" ;


?>
