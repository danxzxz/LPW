<?php

$nome = $_POST['nome']; 
$diretor = $_POST['diretor']; 
$ano = $_POST['ano']; 
$link = $_POST['link']; 


echo
"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/estilo_card.css'>
    <title>Document</title>
</head>
<body>
    <div class='card'>
        <h2>$nome</h2>
        <p>Diretor: $diretor</p>
        <p>Ano: $ano</p>
        <img src='$link' alt='Imagem do Filme'/>
    </div>

</body>
</html>";

echo "<br><br>";
echo "<a href='formulario.php'>Cadastrar outro filme</a>";