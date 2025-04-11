<?php

function desenhaLinha($imagem, $nome, $tipo1, $tipo2, $desc){
    echo "<tr>";
    echo "<td> ".$imagem. "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $tipo1 . "</td>";
    echo "<td>" . $tipo2 . "</td>";
    echo "<td>" . $desc . "</td>";
    echo "</tr>";
}

class Pokemon {
    private $imagem;
    private $nome ;
    private $tipo1;
    private $tipo2;
    private $desc;   



    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getTipo1()
    {
        return $this->tipo1;
    }

    public function setTipo1($tipo1): self
    {
        $this->tipo1 = $tipo1;
        return $this;
    }

    public function getTipo2()
    {
        return $this->tipo2;
    }

    public function setTipo2($tipo2): self
    {
        $this->tipo2 = $tipo2;
        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc): self
    {
        $this->desc = $desc;
        return $this;
    }
}

