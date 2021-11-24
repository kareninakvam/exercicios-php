<?php 
/*
Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês.
*/

$valorPorHora = filter_input(INPUT_POST, "valor");
$horasTrabalhadas = filter_input(INPUT_POST, "horasTrabalhadas");
$mes = filter_input (INPUT_POST, "mes");
$salario = $valorPorHora * $horasTrabalhadas;

$mensagem = "Seu salário em {$mes} é de {$salario} reais.";
?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Valor do Salário </title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
   	<form method="post">
   	   <label>Insforme o mês: <input type="text" name="mes"/></label><br>
       <label>Coloque o valor do seu salário por hora: <input type="text" name="valor"/></label><br>
       <label>Quantas horas foram trabalhadas: <input type="text" name="horasTrabalhadas"/></label><br>
       <input type="submit" name="btnCalcular" value="Calcular">
    </form>

    <h1><?=$mensagem;?></h1>