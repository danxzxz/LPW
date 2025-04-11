<?php

function desenhaLinha($numero, $nome, $inicio, $fim){
    echo "<tr>";
    echo "<td>" . $numero . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $inicio . "</td>";
    echo "<td>" . $fim . "</td>";
    echo "</tr>";
}


class Presidente {
    private $numero;
    private $nome ;
    private $inicio;
    private $fim;

    

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of inicio
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set the value of inicio
     */
    public function setInicio($inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get the value of fim
     */
    public function getFim()
    {
        return $this->fim;
    }

    /**
     * Set the value of fim
     */
    public function setFim($fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}
