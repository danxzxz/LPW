<?php






/*

http://localhost/FelipeL/LPW/
*/


$par = 0;
$impar = 0;
for ($i=20  ; $i <= 70; $i++) { 
    if($i % 2 == 0){
        $par = $par + $i;
    }
    else{
        $impar = $impar + $i;
    }
}

echo "Impares ". $impar."<br>";
echo "Pares ". $par."<br>";