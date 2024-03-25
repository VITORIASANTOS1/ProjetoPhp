<?php 

	$altura = 1.65;
	$peso = 50;
	$nome = "João";

	function calcular($altura,$peso){
	return $peso/($altura*$altura);
	}

	$resp =calcular (1.65, 50);

	echo 'Olá ' . $nome .  ' seu peso é ' . $peso . ' e sua altura ' . $altura . ' seu imc é: ' . $resp;

 ?>