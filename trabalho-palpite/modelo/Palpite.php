<?php

class Palpite {
    private $nome;
    private $link;
    private $dica;

    public function __construct($nome, $link, $dica) {
        $this->nome = $nome;
        $this->link = $link;
        $this->dica = $dica;
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
    public function getLink()
    {
            return $this->link;
    }
    public function setLink($link): self
    {
            $this->link = $link;

            return $this;
    }
    public function getDica()
    {
            return $this->dica;
    }
    public function setDica($dica): self
    {
            $this->dica = $dica;

            return $this;
    }
}
