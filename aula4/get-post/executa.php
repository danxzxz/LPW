<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];



if ($nome == '' || $idade == '') {

    echo "<p style='color:red;'>->Por favor, preencha todos os campos.</p>";
    echo "<a href='form.php'>Voltar ao formulário</a>";
} else {
    echo "Bem vindo " . $nome . " - " . $idade . " anos";

    echo "<br>";
    echo "<a href='form.php'>Voltar</a>";
}
