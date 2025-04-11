<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    if($num1 && $num2 != ""){
        echo  $num1 . " + " . $num2 . " = " . ($num1 + $num2);
        echo "<br>";
        echo  $num1 . " - " . $num2 . " = " . ($num1 - $num2);
        echo "<br>";
        echo  $num1 . " / " . $num2 . " = " . ($num1 / $num2);
        echo "<br>";
        echo  $num1 . " X " . $num2 . " = " . ($num1 * $num2);
        echo "<br>";
        echo  $num1 . " % " . $num2 . " = " . ($num1 % $num2);


    }else
    echo "informe os parametro 'num1 e num2'";
}else{
    echo "informe os parametro 'num1 e num2'";
}

