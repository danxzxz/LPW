<?php
require_once("model/Pessoa.php");




if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];

    if ($tipo === 'C') {
        $pessoa = new Pessoa($nome, $sobrenome, $idade);
    
        echo "Nome completo: " . $pessoa->getNome() . " " . $pessoa->getSobrenome() . "<br>";
        echo "Idade: " . $pessoa->getIdade();
    
    } elseif ($tipo === 'A') {

        $pessoa["nome"] = $_GET['nome'];
        $pessoa["sobrenome"] = $_GET['sobrenome'];
        $pessoa["idade"] = $_GET['idade'];
        
    
        echo "Nome completo: {$pessoa['nome']} {$pessoa['sobrenome']}<br>";
        echo "Idade: {$pessoa['idade']}";
    
    }
    elseif ($tipo != "") {
        echo "informe o parametro 'tipo' (C ou A)"; 

    }else{
        echo "informe o parametro 'tipo' (C ou A)"; 
    }
}

