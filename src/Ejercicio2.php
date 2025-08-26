<?php
//Problema de Suma de Números Pares
//Crea un script que sume todos los números pares en un array de números enteros

namespace Erick\Estructurasdedatosenphp;

class Ejercicio2{

    private function sumOfPairs($numbers)    {
        $sum = 0;
        foreach ($numbers as $number) {
            if ($number % 2 === 0){
                $sum += $number;
            }
        }
        return $sum;
    }
    public function sumOfPair($numbers) {
        $result = $this->sumOfPairs($numbers);
        return $result;
    }
}