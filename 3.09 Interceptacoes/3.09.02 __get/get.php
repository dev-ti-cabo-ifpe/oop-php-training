<?php
include_once 'classes/Produto.class.php';

$produto = new Produto(1, 'Pen Drive 512Mb', 1, 345.67);

echo $produto->Preco;

?>
