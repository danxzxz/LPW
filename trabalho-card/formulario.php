<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_form.css">
    <title>Cadastro de Livro</title>
</head>

<body>
    <h2>Cadastro de Livro</h2> 
    <form method="POST" action="card.php">
        <input name="nome" placeholder="Título do Livro" />
        <br>
        <input name="autor" placeholder="Autor" />
        <br>
        <input name="ano" placeholder="Ano de Publicação" />
        <br>
        <input name="genero" placeholder="Gênero Literário" />
        <br>
        <textarea name="sinopse" placeholder="Sinopse" rows="4" cols="30" style="margin: 10px 0; padding: 10px; border-radius: 5px;"></textarea>
        <br>
        <input name="link" placeholder="URL da capa do livro" />
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
