<?php
    function procurarNome(array $nomes, $nomeProcurado){
        foreach($nomes as $nome){
            if($nome == $nomeProcurado){
                return true;
            }
        }
        return false;
    }

    $alunos = ["Lucas", "Gabriel", "Maria", "Julia"];

    echo procurarNome($alunos, "Maa");