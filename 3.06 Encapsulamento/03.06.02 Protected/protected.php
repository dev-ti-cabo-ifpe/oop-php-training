<?php
include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

$pedrinho = new Estagiario;
#$pedro->Salario = 'Oitocentos e sententa e seis';

$pedrinho->SetSalario(248);

echo 'Salario de Pedrinho é (R$) ' . $pedrinho->GetSalario() .  "\n";

?>
