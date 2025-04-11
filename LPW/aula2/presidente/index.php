<?php
require_once("model/Presidente.php");

$p1 = new Presidente();
$p1-> setNumero(16);
$p1->setNome("Eurico Gaspar Dutra");
$p1->setInicio(1946);
$p1->setFim(1951);


$p2 = new Presidente();
$p2-> setNumero(17);
$p2->setNome("Getúlio Vargas");
$p2->setInicio(1951);
$p2->setFim(1954);

$p3 = new Presidente();
$p3-> setNumero(18);
$p3->setNome("Café Filho");
$p3->setInicio(1954);
$p3->setFim(1955);

$p4 = new Presidente();
$p4-> setNumero(19);
$p4->setNome("Carlos Luz");
$p4->setInicio(1955);
$p4->setFim(1955);

$p5 = new Presidente();
$p5-> setNumero(20);
$p5->setNome("Nereu Ramos");
$p5->setInicio(1955);
$p5->setFim(1956);

$p6 = new Presidente();
$p6-> setNumero(21);
$p6->setNome("Juscelino Kubitschek");
$p6->setInicio(1956);
$p6->setFim(1961);

$presidentes = array($p1, $p2, $p3, $p4, $p5, $p6);


echo "<table border='1'>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "<th>Inicio</th>";
echo "<th>Fim</th>";
echo "</tr>";

foreach($presidentes as $p) {
    desenhaLinha($p->getNumero(), $p->getNome(), $p->getInicio(), $p->getFim());
}
echo "</table>";