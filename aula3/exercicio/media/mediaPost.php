<?php

echo "media POST";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
echo "<br>";
echo  $num1 . " | " . $num2 . " | " . $num3 . " | " . " \na média desses números é: ".(($num1 + $num2 + $num3) /3);


/*
http://localhost:80/LPW/aula3/exercicio/media/mediaGet.php?num1=2&num2=2&num3=2
*/