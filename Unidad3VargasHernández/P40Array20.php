<?php
/* CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo
los números del 150 al 200 de la siguiente manera:
En el Arreglo1 van los números pares, en el $Arreglo 2 van los números impares, en el Arreglo3 va la suma de los números correspondientes al mismo índice 
*/
$Arreglo1 = array(); 
$Arreglo2 = array(); 
$Arreglo3 = array();
for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i;
    } else {
        $Arreglo2[] = $i; 
    }
}
for ($i = 0; $i < count($Arreglo1); $i++) {
  $Arreglo3[] = $Arreglo1[$i] + $Arreglo2[$i];
}
echo "CBTIS 89 <br>";
echo "Array1 ---- Array2 ----- Array3 <br>";

for ($i = 0; $i < count($Arreglo1); $i++) {
    echo $Arreglo1[$i] . " --------- " . $Arreglo2[$i] . " -------- " . $Arreglo3[$i]."<br>";
}
?>