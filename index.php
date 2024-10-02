<?php 

$matrizArray = [[3,2,1], [1,2,3],[3,2,1]];
$total_e = 0;

for ($c=0; $c < count($matrizArray); $c++){
     
    $total_e += count($matrizArray[$c]);

     for ($ce=0; $ce < count($matrizArray[$c]); $ce++){
     }
     echo "Quantidade de array dentro do indice " . $c . ": " . count($matrizArray[$c]) . "</br>";
}
echo "O total de elementos dentro da array: " . $total_e;


?>


