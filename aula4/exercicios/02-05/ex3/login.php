<?php

$logado = false;
if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login === "ifpr" && $senha === "tds") {
        $logado = true;
    } else {
        echo "<p style='color: red;'>Login ou senha incorretos!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if (! $logado):
    ?>
        <form method="post" action="">
            <label for="login">Login:</label><br>
            <input type="text" name="login" placeholder="login"><br>


            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>

            <input type="submit" value="Entrar">
        </form>

    <?php  else: ?>
        <p>bem vindo ao tds</p>
    <?php endif; ?>
</body>

</html>