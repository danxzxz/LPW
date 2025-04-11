<?php

$ret1 = array("base"=> 10,
             "altura" => 20);

$ret2 = array("base"=> 5,
             "altura" => 10);

$ret3 = array("base"=> 3,
             "altura" => 15);

$retangulos = array($ret1,$ret2,$ret3);

foreach($retangulos as $dados){
        echo "Area : ".$dados["base"] * $dados["altura"]."<br>";
}