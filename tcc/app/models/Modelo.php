<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/04/18
 * Time: 16:25
 */

    class Modelo
    {
        private $idmodelo;
        private $nomemodelo;
        private $montadora_idmontadora;

        public function __construct($idmodelo = null, $nomemodelo = null, $montadora_idmontadora = null)
        {
            $this->idmodelo = $idmodelo;
            $this->nomemodelo = $nomemodelo;
            $this->montadora_idmontadora = $montadora_idmontadora;
        }

        public function getIdmodelo()
        {
            return $this->idmodelo;
        }

        public function setIdmodelo($idmodelo)
        {
            $this->idmodelo = $idmodelo;
        }

        public function getNomemodelo()
        {
            return $this->nomemodelo;
        }

        public function setNomemodelo($nomemodelo)
        {
            $this->nomemodelo = $nomemodelo;
        }

        public function getMontadoraIdmontadora()
        {
            return $this->montadora_idmontadora;
        }

        public function setMontadoraIdmontadora($montadora_idmontadora)
        {
            $this->montadora_idmontadora = $montadora_idmontadora;
        }


    }