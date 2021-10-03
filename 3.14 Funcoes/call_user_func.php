<?php

function minhafuncao(){
	echo "minha funcao! \n";
}

call_user_func('minhafuncao');

class MinhaClasse{
	function MeuMetodo(){
		echo "meuMetodo! \n";
	}
}
call_user_func(array('MinhaClasse', 'MeuMetodo'));

$obj = new MinhaClasse();
call_user_func(array(&$obj, 'MeuMetodo'));

?>

