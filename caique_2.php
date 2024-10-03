<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="pr-br">
        <title>Sim</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <form class="formulario" method="get">
            <label for="numero1">Digite um número:</label>
            <input type="number" id="valorA" name="numero1">

            <input type="submit" value = "Verificar se é par ou ímpar">

        <?php 
       if(isset($_GET['numero1'])) {
           $valor1 = $_GET['numero1'];
           
           if($valor1 % 2 == 0){
               echo "<br>É par";
           }else{
               echo "<br>É impar";
           }

       }

        ?>