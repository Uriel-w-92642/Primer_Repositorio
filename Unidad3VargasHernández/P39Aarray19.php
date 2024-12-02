<?php
/* CBTIS 89
P39Array19.php
Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0.
Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0.


Vargas Hernández Uriel
Programación 3°A

*/
	$Nombre = array("Paco", "Mari", "Lalo", "Rosi", "Paty", "Beto");
	$Edad = array(17, 30, 71, 38, 12, 58);
	echo "Nombre----Edad----Grupo1----Grupo2----Grupo3";

	for ($i = 0; $i < count($Nombre); $i++) {
	    $grupo1 = 0;
	    $grupo2 = 0;
	    $grupo3 = 0;


	    if ($Edad[$i] < 18) {
	        $grupo1 = 1;
	    } elseif ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
	        $grupo2 = 1;
	    } elseif ($Edad[$i] >= 50) {
	        $grupo3 = 1;
	    }
	  echo "<br>";
	    echo "<br>" . $Nombre[$i] . "---------";
	    echo   $Edad[$i] . "--------";
	    echo   $grupo1 . "-------------";
	    echo   $grupo2 . "-------------";
	    echo   $grupo3 . "";
	}























	
?>
