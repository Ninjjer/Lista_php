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
    <?= 
    'Atividade: RECEBA um numero e mostre o seu sucessor e seu antecessor?<br>'
    ?>
        
        <form class="formulario" method="get">
            <label for="numeroAreceber">Digite um número:</label>
            <input type="number" id="valorA" name="numeroAreceber">

            <input type="submit" value = "Ver o sucessor e o antecessor">

        <?php 
       if(isset($_GET['numeroAreceber'])) {
           $valor = $_GET['numeroAreceber'];
           
           $valorsoma = $valor + 1;
           $valorsub = $valor - 1;

           echo '<br><img src="./receba_professor.jpg" alt="">';
            echo "<br>O Sucessor é: " . $valorsoma;
           
            echo "<br>O antecessor é:  " . $valorsub;
       }

        ?>