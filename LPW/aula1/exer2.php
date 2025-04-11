<?php

function Media($n1,$n2,$n3){

    $media = 0;
    $media = ($n1 + $n2 + $n3) /3 ;
    return $media;

}

echo Media(3,2,9) ."<br>";
echo Media(3,1,9)."<br>";
echo Media(3,3,9)."<br>";