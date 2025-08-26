<?php

require_once __DIR__ ."/src/Ejercicio1.php";
require_once __DIR__ ."/src/Ejercicio2.php";

use Erick\Estructurasdedatosenphp\Ejercicio1;
echo"<div>";
$ejercicio1 = new Ejercicio1();
$list = [1,2,3,4,5,6,7,8,9,10,20,30,40,50];
$result = $ejercicio1->showInvertedList($list);
echo "<h1>Ejercicio 1: Problema de Lista Invertida</h1>";
echo"<h2>Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso</h2>";
echo "<style>ul { list-style-type: '# '; }</style>";
echo "<ul>";
foreach ($result as $item) {
    echo "<li><h4>$item</h4></li>";
}
echo "</ul>";
echo "</div>";

use Erick\Estructurasdedatosenphp\Ejercicio2;
echo "<div>";
$ejercicio2 = new Ejercicio2();
$numbers = [1,2,3,4,5,6,7,8,9,10,20,30,0];
$result = $ejercicio2->sumOfPair($numbers);
echo "<h1>Ejercicio 2: Problema de Suma de Números Pares</h1>";
echo "<h2>Crea un script que sume todos los números pares en un array de números enteros</h2>";
echo "<h3>El resultado es: $result</h3>";
echo "</div>";

