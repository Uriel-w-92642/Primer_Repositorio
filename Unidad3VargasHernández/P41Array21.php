<?php
/* CBTIS 89
P41Array21.php
Programa que almacena en un arreglo llamado
$Compras el valor de 6 compras, posteriormente en otros arreglos se debe almacenar información de acuerdo a las siguientes condiciones:
El contenido del arreglo Descuentos se llenará de la siguiente manera:
Compra menor 300 = 0
Compra mayor 300 y menor o igual 1000 =10%
Compra mayor 1000 y menor o igual a 2500 = 15%
Compra mayor 2500 y menor o igual a 5000 = 20%
Compra mayor 5000 = 25%
En el arreglo $Total se coloca la diferencia entre la compra y el descuento y en arreglo
Porcentaje colocar el porcentaje que se le aplicó de descuento

Vargas Hernández Uriel
3°A Programación Matutino 
*/

$Compras = array(110, 233, 1653, 2543, 4525, 6877);
$Descuentos = array();
$Total = array();
$Porcentaje = array();

foreach ($Compras as $compra) {
    if ($compra < 300) {
        $descuento = 0;
        $porcentaje = 0;
    } elseif ($compra > 300 && $compra <= 1000) {
        $descuento = $compra * 0.10;
        $porcentaje = 10;
    } elseif ($compra > 1000 && $compra <= 2500) {
        $descuento = $compra * 0.15;
        $porcentaje = 15;
    } elseif ($compra > 2500 && $compra <= 5000) {
        $descuento = $compra * 0.20;
        $porcentaje = 20;
    } elseif ($compra > 5000) {
        $descuento = $compra * 0.25;
        $porcentaje = 25;
    }


    $Descuentos[] = $descuento;
    $Total[] = $compra - $descuento;
    $Porcentaje[] = $porcentaje;
}

echo "Compra - Descuento ---------------------- Total ---------------- Porcentaje de Descuento<br>";

for ($i = 0; $i < count($Compras); $i++) {
    echo $Compras[$i] . " - ". "<br>" . " --------------- ". $Descuentos[$i] . " ------------------------------- " . $Total[$i] . " ------------------------- " . $Porcentaje[$i] . "%<br>";
}
?>


