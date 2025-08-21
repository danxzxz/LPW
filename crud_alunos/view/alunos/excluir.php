<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

//1- receber o id do aluno(get)
$id = 0;
if (isset($_GET['id']))
    $id = $_GET['id'];  

//2- chamar o controller para excluir
$alunoCont = new AlunoController();
$erro = $alunoCont->excluir($id);   

//3- verifica se deu erro

    //3.1-SIM: exibe o erro na propria pagiuna
if($erro) {
    echo "<h3>Erro ao excluir o aluno</h3>";
    echo "<p>$erro</p>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
}   
    //3.2(sucesso)
