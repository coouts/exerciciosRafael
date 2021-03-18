<?php
    function deletarValor(array $numeros, $valor){

        for($i=0 ;$i<= count($numeros); $i++){
            if($numeros[$i] == $valor){
                unset($numeros[$i]);
                return $numeros;
            }
        }
        return false;
    }

    $inteiros = [0,1,2,3,45,43,123,87,5643];

    print_r(deletarValor($inteiros, 5643));