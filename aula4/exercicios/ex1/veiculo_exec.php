<?php
// veiculo_exec.php

class Veiculo
{
    public $modelo;
    public $marca;
    public $combustivel;

    public function __construct($modelo, $marca, $combustivel)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->combustivel = $combustivel;
    }

    public function getCombustivelDescricao()
    {
        switch ($this->combustivel) {
            case 'A':
                return 'Álcool';
            case 'G':
                return 'Gasolina';
            case 'F':
                return 'Flex';
            default:
                return 'Não informado';
        }
    }


    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combustivel
     */
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set the value of combustivel
     */
    public function setCombustivel($combustivel): self
    {
        $this->combustivel = $combustivel;

        return $this;
    }
}

$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];

$veiculo = new Veiculo($modelo, $marca, $combust);

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo->modelo . "<br>";
echo "Marca: " . $veiculo->marca . "<br>";
echo "Combustível: " . $veiculo->getCombustivelDescricao() . "<br>";

echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";
