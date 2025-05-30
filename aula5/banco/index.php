    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once('util/conexao.php');

    $conn = Conexao::getConexao();
    // print_r($conn);

    $msgErro = "";
    //verificar seo usuario ja clicou no gravar
    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $qtdPag = $_POST['qtd_paginas'];
        $autor = $_POST['autor'];

        //validar dados
        $erros = array();
        if (! $titulo) 
            array_push($erros, 'informe o titulo');
            if (! $genero) 
            array_push($erros, 'informe o genero');
            if (! $qtdPag) 
            array_push($erros, 'informe o numero de paginas');
            if (! $autor) 
            array_push($erros, 'informe o autor');

            if(count($erros) == 0){

        //inserir as infos na base de dados
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor)
                VALUES (?, ?, ?, ?)";
        $stm = $conn->prepare($sql);
        $stm->execute([$titulo, $genero, $qtdPag, $autor]);


        header("location:index.php");
            }else{
                $msgErro = implode("<br>", $erros);
            }
    }




    if (isset($_GET['excluir'])) {
        $idExcluir = $_GET['excluir'];


        $sqlExcluir = "DELETE FROM livros WHERE id = ?";
        $stmExcluir = $conn->prepare($sqlExcluir);
        $stmExcluir->execute([$idExcluir]);

        header("Location: index.php");
    }


    //buscar os livros ja salvos
    $sql = "SELECT * FROM livros";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $livros = $stm->fetchAll();
    //echo "<pre>" . print_r($livros, true) . "</pre>";

  
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Livros</title>
    </head>

    <body>

        <h2>Cadastro de Livros</h2>
        <!-- onsubmit="return validarCampos(); -->
        <form method="POST" action="">

            <div style="margin-bottom: 10px;">
                <label for="titulo">Título: </label>
                <input type="text" name="titulo" id="titulo"><br>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="genero">Gênero:</label>
                <select name="genero" id="genero">
                    <option value="">--</option>
                    <option value="D">Drama</option>
                    <option value="F">Ficção</option>
                    <option value="R">Romance</option>
                    <option value="O">Outro</option>
                </select>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="qtd_pag">Paginas:</label>
                <input type="number" name="qtd_paginas" id="qtd_paginas"><br>
            </div>

            <div style="margin-bottom: 10px;">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor"><br>
            </div>
            <div style="margin-bottom: 10px;">
                <input type="submit" name="cadastrar" value="Cadastrar">
            </div>

            <div id="mensagem-erro" style="color: red; margin-top: 10px;">
                <?= $msgErro ?>
            </div>


        </form>

        <h2>listagem</h2>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Gênero</th>
                <th>Páginas</th>
                <th>Autor</th>
                <th>Excluir</th>

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
                    <td><?= $livro['autor'] ?></td>
                    <td> <a href="excluir.php?id=<?= $livro['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </table>


        <script src="js/validacao.js"></script>
    </body>

    </html>