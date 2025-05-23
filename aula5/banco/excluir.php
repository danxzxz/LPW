<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('util/conexao.php');

if (!isset($_GET['id'])) {

    echo "<script>alert('ID inexistente');</script>";
    echo "<a href='index.php'>Voltar para o cadastro</a>";
    exit;
    
}

$idExcluir = $_GET['id'];

$conn = Conexao::getConexao();
$sqlExiste = "SELECT COUNT(*) FROM livros WHERE id = ?";
$stmExiste = $conn->prepare($sqlExiste);
$stmExiste->execute([$idExcluir]);
$count = $stmExiste->fetchColumn();

if ($count == 0) {
    echo "<script>alert('ID inexistente');</script>";
    echo "<a href='index.php'>Voltar para o cadastro</a>";
    exit;
}


$conn = Conexao::getConexao();
$sql = "DELETE FROM livros WHERE id = ?";
$stm = $conn->prepare($sql);
$stm->execute([$idExcluir]);




// Apos excluir, redireciona para a lista
header("Location: index.php");

