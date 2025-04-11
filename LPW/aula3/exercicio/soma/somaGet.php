<?php

echo "Soma GET";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
echo "<br>";
echo  $num1 . " + " . $num2 . " = " . ($num1 + $num2);


/*
http://localhost:80/LPW/aula3/exercicio/soma/somaGet.php?num1=1&num2=2
*/