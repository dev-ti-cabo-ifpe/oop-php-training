<?php

class Aplicacao {
	 
	 
	static function Sobre(){
		$fd = fopen('http://localhost/oop_php/3.07%20Membros%20Classe/3.07.03%20Metodos%20Estaticos/readme.txt', 'r');
		while ($linha = fgets($fd, 200)){
			echo $linha;
		}
		 
	 }
}
echo "Informações sobre a aplicação: \n";
echo "=======================: \n";
Aplicacao::Sobre();

?>