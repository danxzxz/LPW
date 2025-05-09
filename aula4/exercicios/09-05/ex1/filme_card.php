<?php


$nome = $_POST["nome"]; 
$diretor = $_POST["diretor"]; 
$ano = $_POST["ano"]; 
$link = $_POST["link"]; 


echo
"<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
    $nome<br>
    $diretor<br>
    $ano<br>
    <img style='width: 100%; height: auto;' src='$link' /><br>
    </div>";
