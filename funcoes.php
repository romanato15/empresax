<?php
function lerArquivo($nomeArquivo) {

    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

function buscarFuncionario($funcionarios, $nome) {

    $funcionariosFiltro= [];

    foreach ($funcionarios as $funcionario) {
        if ($funcionario-> nome == $nome) {
            $funcionariosFiltro[] = $funcionario;
        }
    }
    return $funcionariosFiltro;
}
