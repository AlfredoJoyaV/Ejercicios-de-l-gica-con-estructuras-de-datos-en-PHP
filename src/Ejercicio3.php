<?php
// Problema de Frecuencia de Caracteres
//Implementa una función que tome una cadena de texto y devuelva un array asociativo que muestre la frecuencia de cada carácter en la cadena
namespace Erick\Estructurasdedatosenphp;

class Ejercicio3{
    private function characterFrequency($text){
        $frequency = [];
        $text = strtolower($text);
        for($i = 0; $i < strlen($text); $i++){
            $char = $text[$i];
            if ($char === ' ') continue;
            if (isset($frequency[$char])) {
                $frequency[$char]++;
            } else {
                $frequency[$char] = 1;
            }
        }
        return $frequency;
    }
    public function characters($text){
        $result = $this->characterFrequency($text);
        return $result;
    }
}