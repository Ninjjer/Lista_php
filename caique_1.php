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
            <label for="valorA">Valor A:</label>
            <input type="number" id="valorA" name="valorA">

            <label for="valorB">Valor B:</label>
            <input type="number" id="valorB" name="valorB">

            <label for="valorC">Valor C:</label>
            <input type="number" id="valorC" name="valorC">

            <input type="submit" value = "Calcular">
 
        
        <?php 


        if(isset($_GET['valorA']) && isset($_GET['valorB']) && isset($_GET['valorC'])){
            $valorA = $_GET['valorA'];
            $valorB = $_GET['valorB'];
            $valorC = $_GET['valorC'];

            echo 'Valor de A: ' . $valorA . ' Valor de B: ' . $valorB . ' Valor de C: ' . $valorC;

            $valorAB = $valorA + $valorB;

            if($valorAB > $valorC){
                echo "<br> A soma de A e B é maior que C";
            }else if($valorAB < $valorC){
                echo "<br> A soma de A e B é menor que C";
            }else{
                echo "<br> A soma de A e B é igual a C";
            }
        }


        
        
        ?>
    </body>
</html>

 
