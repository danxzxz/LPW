<?php

echo "Pagina aberta";

$nome = $_POST['nome'];
echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_POST['sobrenome'];
echo " " . $sobrenome;

$idade = $_GET['idade'];
echo " " . $idade;

/*
http://localhost:80/LPW/aula3/post.php
*/