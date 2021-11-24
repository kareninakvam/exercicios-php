<?php

$notas = [10, 7, 10];
$notaSomadas = 0;

for ($i= 0; $i <3; $i++){
	
$notaSomadas = $notaSomadas + $notas [$i];
}

$mediaFinal = $notaSomadas / 3;



if ($mediaFinal >= 6){
	echo "N1 = {$notas[0]} | N2 = {$notas[1]} | N3 = {$notas[2]} | MG = {$mediaFinal} [Aprovado]";
} else {
	echo "N1 = {$notas[0]} | N2 = {$notas[1]} | N3 = {$notas[2]} | MG = {$mediaFinal} [Reprovado]";
}

?>