<?php

class Aplicacao {
	 
	 static $Quantidade;
	 
	 function __construct($Nome){
		 self::$Quantidade ++;
		 $i = self::$Quantidade;
		 echo "Nova Aplicacao nr.  $i: $Nome\n";
	 }
}
	
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de Aplicacoes = ' . Aplicacao::$Quantidade .  "\n";


?>