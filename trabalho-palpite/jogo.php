<?php
require_once("modelo/Palpite.php");

echo "<style>
    * { margin: 0; padding: 0; }
    body {
        background-color: #DDEB9D;
        font-family: Arial, sans-serif;
    }
    header {
        background-color: #626F47;
        color: white;
        padding: 20px;
        text-align: center;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        margin-top: 30px;
    }
    .personagem {
        text-align: center;
        width: 200px;
    }
    .personagem img {
        width: 100%;
        height: auto;
        max-width: 200px;
        margin-bottom: 10px;
    }
    .dica, .result {
        text-align: center;
        font-size: 20px;
    }
    .button {
        text-align: center;
        margin-top: 20px;
        font-size: 18px;
    }
</style>";

$p1 = new Palpite("Mario", "https://upload.wikimedia.org/wikipedia/pt/thumb/e/eb/Mario_%28personagem%29.png/250px-Mario_%28personagem%29.png", "Sou encanador e salvo uma princesa em apuros.");
$p2 = new Palpite("Pikachu", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png", "Sou pequeno, amarelo e solto raios elétricos quando fico animado.");
$p3 = new Palpite("Batman", "https://i.pinimg.com/736x/5f/3b/30/5f3b30949f15610299d61cd093eee797.jpg", "Sou um vigilante noturno e rico.");

$palpites = [$p1, $p2, $p3];

//sorteio
$resposta = rand(1, 3);

echo "<header><h2>Jogo da Adivinhação - Personagens</h2></header>";
echo "<p style='font-size:20px;text-align:center;'>Escolha um dos personagens abaixo e veja se você acerta o sorteado!</p>";



echo "<div class='container'>";
foreach ($palpites as $i => $personagem) {
    $id = $i + 1;
    echo "<div class='personagem'>
            <img src='" . $personagem->getLink() . "' alt='" . $personagem->getNome() . "'>
            <a href='?palpite={$id}&resposta={$resposta}' style='font-size:18px; font-weight:bold;'>{$id} - " . $personagem->getNome() . "</a>
          </div>";
}
echo "</div><br><br>";

// dica
echo "<div class='button'>
        <a href='?dica=1&resposta={$resposta}' style='font-size:18px;'>🔍 Ver dica antes de palpitar</a>
      </div><br>";

if (isset($_GET['dica']) && $_GET['dica'] == 1 && isset($_GET['resposta'])) {
    $dica = $palpites[$resposta - 1]->getDica();
    echo "<div class='dica'>💡 <strong>Dica:</strong> {$dica}</div>";
}

// palpite
if (isset($_GET['palpite']) && isset($_GET['resposta'])) {
    $palpite = (int)$_GET['palpite'];
    $resposta = (int)$_GET['resposta'];

    if ($palpite < 1 || $palpite > 3 || $resposta < 1 || $resposta > 3) {
        echo "<p style='color:red; text-align:center;'>Palpite ou resposta inválidos.</p>";
    }

    if ($palpite === $resposta) {
        $acertou = $palpites[$resposta - 1];
        echo "<div class='result' style='color:green;'>🎉 Parabéns! Você acertou!</div>";
        echo "<p style='text-align:center;'>O personagem sorteado era: <strong>{$acertou->getNome()}</strong></p>";
        echo "<div style='text-align:center;'>
                <img src='" . $acertou->getLink() . "' style='width:150px; height:150px;'>
              </div>";
    } else {
        $correto = $palpites[$resposta - 1];
        echo "<div class='result' style='color:red;'>❌ Você errou!</div>";
        echo "<p style='text-align:center;'>O personagem sorteado era: <strong>{$correto->getNome()}</strong></p>";
    }

    echo "<div class='button'>
            <a href='jogo.php' style='font-size:18px; color:blue;'>🔄 Jogar novamente</a>
          </div>";
}
