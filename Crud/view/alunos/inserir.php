<?php
require_once(__DIR__."/../model/Aluno.php");
require_once(__DIR__."/../model/Curso.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//RECEBER OS DADOS DO FORM


if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $idade= $_POST['idade'];
    $estrangeiro = $_POST['estrangeiro'];
    $idCurso = $_POST['curso'];

    $aluno = new Aluno;
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    
    $curso = new Curso;
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

   // print_r($aluno);

    $alunoCont = new AlunoController();
    $alunoCont ->inserir($aluno);

    header("location: listar.php");
}







include_once(__DIR__."/form.php");

?>