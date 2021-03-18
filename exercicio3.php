<?php
    function inverticaoArray(array $ordem){
        $i = [];
        $step = count($i);
        $a = count($ordem) - 1;
        for($a; $step <= $a; $a--){
                echo $ordem[$a] . "<br/><br/>";
        }
    }

    $nomes = ["Italo", "Gabriel", "Julia"];
    echo inverticaoArray($ordem);