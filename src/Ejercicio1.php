<?php
//Problema de Lista Invertida
//Escribe un programa que tome un array de números y devuelva una nueva lista que contenga los mismos elementos en orden inverso

namespace Erick\Estructurasdedatosenphp;

class Ejercicio1{
    private function invertedList($list){
        return array_reverse($list);
        
    }

    public function showInvertedList($list){
        $result = $this->invertedList($list);
        return $result;
    }

}
?>