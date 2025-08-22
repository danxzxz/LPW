<?php

require_once(__DIR__ . "/../../model/Aluno.php");
require_once(__DIR__ . "/../../controller/AlunoController.php");

//1- receber o id do aluno(get)
$id = 0;
if (isset($_GET['id']))
    $id = $_GET['id'];  

//2- chamar o controller para excluir
$alunoCont = new AlunoController();
$aluno = $alunoCont->buscarPorId($id);  
if($aluno) {
    $alunoCont->excluirPorId($aluno->getId());


//3- verifica se deu erro
if($erros){
    //3.1- se deu erro, exibe mensagem
    $msgErros = implode("<br>", $erros);
    // foreach($erros as $erro) {
    //     echo "<p class='alert alert-danger'>$erro</p>";
    // }
}else{
    //3.2- se nao deu erro, redireciona para a lista de alunos
    header("Location: listar.php");
    exit();
}
} else {
   
    echo "<p class='alert alert-danger'>Aluno não encontrado!</p>";
    echo "<p><a href='listar.php'>Voltar</a></p>";
    }