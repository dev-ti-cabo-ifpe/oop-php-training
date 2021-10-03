<?php
include_once 'classes/Fornecedor.class.php';
include_once 'classes/Contato.class.php';

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Alimentos S.A.' ;
$fornecedor->Endereco = "Rua Ipiranga";
$fornecedor->Cidade = 'Poços de Calda';
$fornecedor->SetContato('Mauro', '51 1234-5678', 'mauro@bomgosto.com.br');

echo $fornecedor->RazaoSocial . "\n";
echo "Informacoes de Contato: \n";
echo $fornecedor->GetContato(). "\n";

?>
