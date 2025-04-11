    <?php


    if(isset($_GET['cor'])) {
        $cor = $_GET['cor'];
        if($cor != ""){
        echo "<body style='background-color: " . $cor . ";'>";
        echo "</body>";
        }else
        echo "informe o parametro 'cor'";
    }else{
        echo "informe o parametro 'cor'";
    }

    ?>


    <!-- 
http://localhost:80/LPW/aula3/exercicio/cor/bgGet.php?cor=blue
  -->