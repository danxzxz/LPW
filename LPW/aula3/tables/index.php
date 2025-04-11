
<link rel="stylesheet" href="estilo.css">
    <!-- <div class="dropdown">
    <button class="dropbtn">Times de futebol</button>
    <div class="dropText">
    <span><img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Escudo_Botafogo.png" width="20" height="20">Botafogo</span>
    <span><img src="https://upload.wikimedia.org/wikipedia/pt/a/ac/CRVascodaGama.png" width="20" height="20">Vasco</span>
    <span><img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Fluminense_FC_escudo.png" width="20" height="20">Fluminense</span>
    </div>
    </div> -->

<?php
require_once("model/Link.php");

function desenhaBotao($arrayLinks, $titulo) {
    echo "<div class='dropdown'>";
    echo "<button class='dropbtn'>$titulo</button>";
    echo "<div class='dropText'>";
    
    foreach ($arrayLinks as $link) {
        echo "<span>" . $link->getLinkImg() . $link->getInfo() . "</span>";
    }

    echo "</div>";
    echo "</div>";
}

$botao1 = [];
$botao1[] = new Link("<img src='https://upload.wikimedia.org/wikipedia/commons/c/cb/Escudo_Botafogo.png' width='20' height='20'>", "Botafogo");
$botao1[] = new Link("<img src='https://upload.wikimedia.org/wikipedia/pt/a/ac/CRVascodaGama.png' width='20' height='20'>", "Vasco");
$botao1[] = new Link("<img src='https://upload.wikimedia.org/wikipedia/commons/a/ad/Fluminense_FC_escudo.png' width='20' height='20'>", "Fluminense");

$botao2 = [];
$botao2[] = new Link("<img src='https://www.comprafacilhortifruti.com.br/storage/431/conversions/maracuj%C3%A1-featured.jpg' width='20' height='20'>", "Maracujá");
$botao2[] = new Link("<img src='https://fortatacadista.vteximg.com.br/arquivos/ids/161328-1000-1000/LARANJA-LIMA-KG---631876.jpg?v=637505503815100000' width='20' height='20'>", "Laranja");
$botao2[] = new Link("<img src='https://cdn.awsli.com.br/2500x2500/502/502061/produto/18364412/8aaa8433f9.jpg' width='20' height='20'>", "banana");

$botao3 = [];
$botao3[] = new Link("<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQmLFPh_YJmqmG_LGaCxZw-7mC6lVLf7ArQQ&s' width='20' height='20'>", "Fiat");
$botao3[] = new Link("<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Chevrolet-logo.png/2560px-Chevrolet-logo.png' width='20' height='20'>", "Chevrolet");
$botao3[] = new Link("<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrfWfenrbxYGSZSMrH_gcGSzVtklWaOIlFeA&s' width='20' height='20'>", "Honda");

$botao4 = [];
$botao4[] = new Link("<img src='https://static.vecteezy.com/ti/vetor-gratis/p1/6057996-tiktok-logo-on-transparent-background-gratis-vetor.jpg' width='20' height='20'>", "Tiktok");
$botao4[] = new Link("<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9V4NGi4jiLPvEtqcMH5AkQRSsyJ77UaJjDQ&s' width='20' height='20'>", "Instagram");
$botao4[] = new Link("<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png' width='20' height='20'>", "Whatsapp");



desenhaBotao($botao1, "Times de Futebol");
desenhaBotao($botao2, "Frutas");
desenhaBotao($botao3, "Montadoras");
desenhaBotao($botao4, "Redes Sociais");


