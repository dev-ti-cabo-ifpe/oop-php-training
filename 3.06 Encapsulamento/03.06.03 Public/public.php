<?php
include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->Nome = 'Pedrinho';

$mariana = new Estagiario;
$mariana->Nome = 'Mariana';


echo $pedrinho->Nome . "\n";
echo $mariana->Nome . "\n";

?>
