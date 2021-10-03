<?php

include_once 'classes/IAluno.class.php';
include_once 'classes/Aluno.class.php';

$joaninha = new Aluno;

$joaninha->setNome("Joana Maranhao");

echo  $joaninha->getNome();

?>