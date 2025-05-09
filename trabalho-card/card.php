<?php

$nome = $_POST['nome']; 
$autor = $_POST['autor']; 
$ano = $_POST['ano']; 
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];
$link = $_POST['link'];

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/estilo_card.css'>
    <title>Livro Cadastrado</title>
</head>
<body>
    <div class='card'>
        <h2>$nome</h2>
        <p><strong>Autor:</strong> $autor</p>
        <p><strong>Ano:</strong> $ano</p>
        <p><strong>Gênero:</strong> $genero</p>
        <p><strong>Sinopse:</strong><br>$sinopse</p>
        <img src='$link' alt='Capa do Livro' />
    </div>

    <a href='formulario.php'>Cadastrar outro livro</a>
</body>
</html>";

