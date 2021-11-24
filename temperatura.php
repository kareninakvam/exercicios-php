<?php
// Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.


$temperatura = filter_input(INPUT_POST, "temperatura");
$conversao = filter_input(INPUT_POST, "conversao");
$novaTemperatura = 0;

switch ($conversao) {
	case 'celsius':
		$novaTemperatura = ($temperatura -32) / 1.8;
		break;

	case 'farenheit':
		$novaTemperatura = ($temperatura * 1.8) + 32;
		break;
	
	default:
		echo "Digite uma opção válida.";
		break;
}

?>


<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Conversão de Temperatura</title>
     <style>
      input, select{padding:5px; margin: 3px;}
     </style>
   </head>
   <body>
     
     <form method="post">
       <label>Digite a temperatura atual: <input type="text" name="temperatura"/></label><br>
      
       <label>Escolha sua conversão:
         <select name="conversao">
           <option value="celsius">Farenheit para Celsius: </option>
           <option value="farenheit">Celsius para Farenheit</option> 
         </select>
       </label><br>

       <input type="submit" name="btnCalcular" value="Calcular">
     </form>

     <h1><?=$novaTemperatura;?></h1>
   </body>
 </html>