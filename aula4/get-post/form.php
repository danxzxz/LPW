<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>cadastro de pessoa</h3>

    <form action="executa.php" method="post">

        <label for="nome">Nome:</label>
        <input type="text" placeholder="informe o nome" name="nome">

        <br><br>

        <label for="idade">idade</label>
        <input type="number" placeholder="informe a idade" name="idade">

        <br><br>

        <button type="submit">enviar</button>
        <button type="reset">limpar</button>

    </form>
</body>

</html>