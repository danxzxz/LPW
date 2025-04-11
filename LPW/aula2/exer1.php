<?php

function desenhaLinha($ordem, $pais, $ouros, $pratas, $bronzes, $totais){
    echo "<tr>";
    echo "<td>" . $ordem . "</td>";
    echo "<td>" . $pais . "</td>";
    echo "<td>" . $ouros . "</td>";
    echo "<td>" . $pratas . "</td>";
    echo "<td>" . $bronzes . "</td>";
    echo "<td>" . $totais . "</td>";
    echo "</tr>";
}

$paises = array();
$pais1 = array("ordem"=>1, "pais"=>"<img style='width: 25px; height: auto;'src='https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg'> Estados Unidos", "ouros"=>46, "pratas"=>37, "bronzes"=>38, "totais"=>121);
$pais2 = array("ordem"=>2, "pais"=>"<img style='width: 25px; height: auto;'src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/960px-Flag_of_the_United_Kingdom_%283-5%29.svg.png'> Grã-Bretanha", "ouros"=>27, "pratas"=>23, "bronzes"=>17, "totais"=>67);
$pais3 = array("ordem"=>3, "pais"=>"<img style='width: 25px; height: auto;'src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/800px-Flag_of_the_People%27s_Republic_of_China.svg.png'>China", "ouros"=>26, "pratas"=>18, "bronzes"=>26, "totais"=>70);
$pais4 = array("ordem"=>4, "pais"=>"<img style='width: 25px; height: auto;'src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png'>Rússia", "ouros"=>19, "pratas"=>17, "bronzes"=>20, "totais"=>56);
$pais5 = array("ordem"=>5, "pais"=>"<img style='width: 25px; height: auto;'src='https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/800px-Flag_of_Germany.svg.png'>Alemanha", "ouros"=>17, "pratas"=>10, "bronzes"=>15, "totais"=>42);

array_push($paises, $pais1, $pais2, $pais3, $pais4, $pais5);

echo "<h1>Tabela de países - Olimpíadas</h1>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Ordem</th>";
echo "<th>País</th>";
echo "<th><img style='width: 100%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/15px-Gold_medal.svg.png' ></th>";
echo "<th><img style='width: 100%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/15px-Silver_medal.svg.png' ></th>";
echo "<th><img style='width: 100%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/15px-Bronze_medal.svg.png' ></th>";
echo "<th><img style='width: 100%; height: auto;' src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/30px-GoldSilverBronze_medals.svg.png' ></th>";
echo "</tr>";

foreach($paises as $dado) {
    desenhaLinha($dado['ordem'], $dado['pais'], $dado['ouros'], $dado['pratas'], $dado['bronzes'], $dado['totais']);
}

echo "</table>";

