<?php

echo "Pagina aberta";

$nome = $_GET['nome'];
echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_GET['sobrenome'];
echo " " . $sobrenome;

/*
http://localhost:80/LPW/aula3/get.php?nome=Daniel&sobrenome=Medeiros
*/