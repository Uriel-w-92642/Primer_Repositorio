<?php 
/* Examen Unidad III
Programa que almacena el nombre de cuatro artículos en un arreglo lamado $Productos y en otro arreglo mulidimensional llamado $Precios almacena los percios correspondientes de 3 meses, esto se hace por medio de filas y columnas
Se debe de calcular por medio de ciclos el subtotal 
Vargas Hernández Uriel 
Programación 3°A
*/
$Productos = ["Vestido", "Pantalón", "Cinturón", "Camiseta "];
$Precios = [
    [500, 600, 550],
    [800, 700, 600],
    [400, 200, 300], 
    [500, 200, 500]  
];
$subtotal = [];
$promedio = [];

for ($i = 0; $i < count($Precios); $i++) {
    $suma = 0; 
    for ($j = 0; $j < count($Precios[$i]); $j++) {
        $suma += $Precios[$i][$j];
    }
    $subtotal[$i] = $suma; 
    $promedio[$i] = $suma / count($Precios[$i]); 
}
echo "-------VENTA DE ROPA-------";
echo "<br>";
echo "Productos ---- Subtotal ----- Promedio <br>";

for ($i = 0; $i < count($Productos); $i++) {
    echo $Productos[$i] . " --------- " . $subtotal[$i] . " -------- " . $promedio[$i]."<br>";
}
echo "<br>";
echo "<br>";
echo "Precios";
echo "<br>";
foreach ($Precios as $fila) {
    foreach ($fila as $precio) {
        echo $precio . " ";
    }
    echo "<br>";
}
?>
