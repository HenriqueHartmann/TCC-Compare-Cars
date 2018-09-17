<?php

class Montadora
{
    private $idmontadora;
    private $montadora;

    public function __construct($idmontadora = null, $montadora = null)
    {
        $this->idmontadora = $idmontadora;
        $this->montadora = $montadora;
    }

    public function getIdMontadora()
    {
        return $this->idmontadora;
    }

    public function setIdMontadora($idmontadora)
    {
        $this->idmontadora = $idmontadora;
    }

    public function getNomeMontadora()
    {
        return $this->montadora;
    }

    public function setNomeMontadora($montadora)
    {
        $this->montadora = $montadora;
    }

}