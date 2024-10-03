<?php 

$matrizArray = [[3,2,1], [1,2,3],[3,2,1]];
$total_e = 0;

for ($c=0; $c < count($matrizArray); $c++){

     for ($ce=0; $ce < count($matrizArray[$c]); $ce++){
        $total_e += ($matrizArray[$c][$ce]);
     }

     echo "Quantidade de indices dentro do sub-array " . $c . ": " . count($matrizArray[$c]) . "</br>";
}
echo "O total de elementos dentro da array: " . $total_e;

?>


/* leia valores a,b,c, em seguida, imprima a soma entre a e b e mostre se a soma é menor que c

receba um numero qualquer e mostrar se é impar ou par

receba um numero e mostre o seu sucessor e seu antecessor

crie um formulario para calcular imc e mostrar o resultado
*/ 