<?php
function desenhaLinha($numero, $nome, $cor){
    echo "<tr style='background-color: $cor;'>";
    echo "<td> ".$numero. "</td>";
    echo "<td>" . $nome . "</td>";
    echo "</tr>";
}
$jogadores = [
    ["numero" => 1, "nome" => "Taffarel"],
    ["numero" => 2, "nome" => "Jorginho"],
    ["numero" => 13, "nome" => "Aldair"],
    ["numero" => 15, "nome" => "Márcio Santos"],
    ["numero" => 6, "nome" => "Branco"],
    ["numero" => 5, "nome" => "Mauro Silva"],
    ["numero" => 8, "nome" => "Dunga"],
    ["numero" => 17, "nome" => "Mazinho"],
    ["numero" => 9, "nome" => "Zinho"],
    ["numero" => 11, "nome" => "Romário"],
    ["numero" => 7, "nome" => "Bebeto"]
];


echo "<table border='1'>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";

foreach($jogadores as $j => $jogador) {
    if ($j % 2 == 0) {
        $cor = "yellow";
    } else {
        $cor = "green";
    }
    desenhaLinha($jogador["numero"], $jogador["nome"], $cor);
}

echo "</table>";

