<?php

$carro1 = array(
    "modelo"=> "Virtus",
    "marca"=> "Wolksvagen",
    "foto"=> "https://http2.mlstatic.com/D_NQ_623281-MLA81241861416_122024-OO.jpg",
);

$carro2 = array(
    "modelo"=> "Renegade",
    "marca"=> "Jeep",
    "foto"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk5JyBU9i7K9ah7rRWbAfNpZIlr2N4Jp4PYg&s",
);

$carro3 = array(
    "modelo"=> "Astra",
    "marca"=> "Chevrolet",
    "foto"=> "https://blog.olhonocarro.com.br/wp-content/uploads/2022/01/Astra-G4-2003-prata.jpg",
);

$carro4 = array(
    "modelo"=> "Focus",
    "marca"=> "Ford",
    "foto"=> "https://cdn.motor1.com/images/mgl/kMpqN/s3/new-ford-focus-rs-render.jpg",
);

$carro5 = array(
    "modelo"=> "Panamera",
    "marca"=> "Porsche",
    "foto"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1sw-k2FBmWom_T5K-bbWrWiiMbX2gl7A0og&s",
);

$carros = array ($carro1,$carro2,$carro3,$carro4,$carro5);

foreach($carros as $dado){

    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
    ".$dado["modelo"]."<br>
    ".$dado["marca"]."<br>
    <img style='width: 100%; height: auto;' src='".$dado["foto"]."' /><br>
    </div>";
}