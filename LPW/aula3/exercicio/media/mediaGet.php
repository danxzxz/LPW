<?php

echo "media GET";

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
echo "<br>";
echo  $num1 . " | " . $num2 . " | " . $num3 . " | " . " \na média desses números é: ".(($num1 + $num2 + $num3) /3);


/*
http://localhost:80/LPW/aula3/exercicio/media/mediaGet.php?num1=2&num2=2&num3=2
*/