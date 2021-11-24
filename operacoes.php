<?php

/* Soma : 1
   Multiplicação : 2
   Divisão: 3
   Subtração : 4
*/
 
$valorDigitado1 = filter_input(INPUT_POST, "txtNumero1");
$valorDigitado2 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "operacao");
$resultado = 0;

if($valorDigitado1  && $valorDigitado2){
	switch ($opera) {
	case '1':
		$resultado = ($valorDigitado1 + $valorDigitado2);
		break;
	case '2':
		$resultado = ($valorDigitado1 - $valorDigitado2);
		break;
	case '3':
		$resultado = ($valorDigitado1 * $valorDigitado2);
		break;
	case '4':
		$resultado = ($valorDigitado1 / $valorDigitado2);
		break;
	
	default:
		echo "Escolha uma opção válida.";
		break;
	}
}

?>


<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <h1><?=$resultado;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <label>Operação:
         <select name="operacao">
           <option value="1">Adição</option>
           <option value="2">Subtração</option>
           <option value="3">Multiplicação</option>
           <option value="4">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="btnCalcular" value="Calcular">
     </form>
   </body>
 </html>