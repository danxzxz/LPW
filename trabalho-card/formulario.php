<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_form.css">
    <title>Document</title>
</head>

<body>
    <h2>Dados do Filme</h2> 
    <form method="POST" action="card.php">
        <input name="nome" placeholder="Informe o nome"/>
        <br>
        <input name="diretor" placeholder="Informe o diretor" />
        <br>
        <input name="ano" placeholder="Informe o ano" />
        <br>
        <input name="link" placeholder="Informe a foto (link)" />
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

