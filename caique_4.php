<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="pr-br">
        <title>IMC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    
    <body>
    <?= 
    'Atividade: Calculo de IMC, clássica atividade<br>'
    ?>
        
        <form class="formulario" method="get">
            <label for="peso">Digite seu peso:</label>
            <input type="number" id="valorA" name="peso">

            <label for="altura">Digite sua altura:</label>
            <input type="number" id="valorA" name="altura">

            <input type="submit" value = "Ver seu IMC">

        <?php 
        if(isset($_GET['peso']) && isset($_GET['altura'])) {
            $peso = $_GET['peso'];
            $alt = $_GET['altura'];
        
            $imc = $peso / (($alt/100) **2);
            
            
            printf("<br>Seu IMC é:  %.2f", $imc);
        }