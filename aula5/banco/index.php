    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once('util/conexao.php');

    $conn = Conexao::getConexao();
    //print_r($conn);

    //buscar os livros ja salvos
    $sql = "SELECT * FROM livros";
    $stm = $conn->prepare($sql);
    $stm ->execute();
    $livros = $stm->fetchAll();
    // echo "<pre>" . print_r($livros, true). "</pre>";

    //verificar seo usuario ja clicou no gravar
    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $qtdPag = $_POST['qtd_paginas'];

        //inserir as infos na base de dados
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
                VALUES (?, ?, ?)";
        $stm = $conn->prepare($sql);
        $stm->execute([$titulo, $genero, $qtdPag]);
    }

    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Livros</title>
    </head>

    <body>
      
        <h2>Cadastro de Livros</h2>

        <form method="POST" action="">

            <div style="margin-bottom: 10px;">
                <label for="titulo">Título: </label>
                <input type="text" name="titulo"><br>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="genero">Gênero:</label>
                <select name="genero">
                    <option value="">--</option>
                    <option value="D">Drama</option>
                    <option value="F">Ficção</option>
                    <option value="R">Romance</option>
                    <option value="O">Outro</option>
                </select>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="qtd_pag">Quantidade de paginas:</label>
                <input type="number" name="qtd_paginas"><br>
            </div>

            <div style="margin-bottom: 10px;">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </div>

        </form>

        <h2>listagem</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Gênero</th>
        <th>Páginas</th>
    </tr>

    <?php foreach ($livros as $livro): ?>
        <tr>
            <td><?= $livro['id'] ?></td> 
            <!--?= é igual a ?php-->
            <td><?= $livro['titulo'] ?></td>
            <td>
                <?php
                switch ($livro['genero']) {
                    case 'D':
                        echo 'Drama';
                        break;
                    case 'F':
                        echo 'Ficção';
                        break;
                    case 'R':
                        echo 'Romance';
                        break;
                    case 'O':
                        echo 'Outro';
                        break;
                }
                ?>
            </td>
            <td><?= $livro['qtd_paginas'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>



    </body>

    </html>