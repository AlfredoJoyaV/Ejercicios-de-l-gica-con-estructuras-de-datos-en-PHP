<?php
//Problema de Bucle Anidado
//Escribe un programa que utilice bucles anidados para imprimir un patrón de asteriscos en forma de pirámide

namespace Erick\Estructurasdedatosenphp;

class Ejercicio4{
    public function printPyramid(int $height)  {
         $output = "";
        for ($i = 1; $i <= $height; $i++){
            for ($x = 0; $x <= $height - $i; $x++){
                echo "&nbsp;";
            }
            for ($y = 1; $y <= (2 * $i - 1); $y++){
                echo "*";
            }
            echo "<br>";
        }
        return $output;
    }
}