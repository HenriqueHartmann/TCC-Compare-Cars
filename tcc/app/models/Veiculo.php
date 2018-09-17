<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/04/18
 * Time: 16:26
 */

class Veiculo
{
    private $idveiculo;
    private $ano;
    private $potencia;
    private $portas;
    private $preco;
    private $altura;
    private $comprimento;
    private $largura;
    private $cambio;
    private $velocidade;
    private $tanque_combustivel;
    private $tip_combustivel;
    private $porta_malas;
    private $tip_direcao;
    private $consumo_urb;
    private $consumo_rod;
    private $marcha;
    private $tip_tracao;
    private $porte;
    private $ocupantes;
    private $tip_freio;
    private $tip_veiculo;
    private $modelo_idmodelo;
    private $like;
    private $dislike;
    private $usuario_idusuario;

    public function __construct($idveiculo = null, $ano = null, $potencia = null, $portas = null, $preco = null, $altura = null, $comprimento = null, $largura = null, $cambio = null,
                                $velocidade = null, $tanque_combustivel = null, $tip_combustivel = null, $porta_malas = null, $tip_direcao = null, $consumo_urb = null, $consumo_rod = null,
                                $marcha = null, $tip_tracao = null, $porte = null, $ocupantes = null, $tip_freio = null, $tip_veiculo = null, $modelo_idmodelo = null, $like = null, $dislike = null,
                                $usuario_idusuario = null)
    {
        $this->idveiculo = $idveiculo;
        $this->ano = $ano;
        $this->potencia = $potencia;
        $this->portas = $portas;
        $this->preco = $preco;
        $this->altura = $altura;
        $this->comprimento = $comprimento;
        $this->largura = $largura;
        $this->cambio = $cambio;
        $this->velocidade = $velocidade;
        $this->tanque_combustivel = $tanque_combustivel;
        $this->tip_combustivel = $tip_combustivel;
        $this->porta_malas = $porta_malas;
        $this->tip_direcao = $tip_direcao;
        $this->consumo_urb = $consumo_urb;
        $this->consumo_rod = $consumo_rod;
        $this->marcha = $marcha;
        $this->tip_tracao = $tip_tracao;
        $this->porte = $porte;
        $this->ocupantes = $ocupantes;
        $this->tip_freio = $tip_freio;
        $this->tip_veiculo = $tip_veiculo;
        $this->modelo_idmodelo = $modelo_idmodelo;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->usuario_idusuario = $usuario_idusuario;
    }

    public function getIdveiculo()
    {
        return $this->idveiculo;
    }

    public function setIdveiculo($idveiculo): void
    {
        $this->idveiculo = $idveiculo;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }

    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    public function getPortas()
    {
        return $this->portas;
    }

    public function setPortas($portas): void
    {
        $this->portas = $portas;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getComprimento()
    {
        return $this->comprimento;
    }

    public function setComprimento($comprimento): void
    {
        $this->comprimento = $comprimento;
    }

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura($largura): void
    {
        $this->largura = $largura;
    }

    public function getCambio()
    {
        return $this->cambio;
    }

    public function setCambio($cambio): void
    {
        $this->cambio = $cambio;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade): void
    {
        $this->velocidade = $velocidade;
    }

    public function getTanqueCombustivel()
    {
        return $this->tanque_combustivel;
    }

    public function setTanqueCombustivel($tanque_combustivel): void
    {
        $this->tanque_combustivel = $tanque_combustivel;
    }

    public function getTipCombustivel()
    {
        return $this->tip_combustivel;
    }

    public function setTipCombustivel($tip_combustivel): void
    {
        $this->tip_combustivel = $tip_combustivel;
    }

    public function getPortaMalas()
    {
        return $this->porta_malas;
    }

    public function setPortaMalas($porta_malas): void
    {
        $this->porta_malas = $porta_malas;
    }

    public function getTipDirecao()
    {
        return $this->tip_direcao;
    }

    public function setTipDirecao($tip_direcao): void
    {
        $this->tip_direcao = $tip_direcao;
    }

    public function getConsumoUrb()
    {
        return $this->consumo_urb;
    }

    public function setConsumoUrb($consumo_urb): void
    {
        $this->consumo_urb = $consumo_urb;
    }

    public function getConsumoRod()
    {
        return $this->consumo_rod;
    }

    public function setConsumoRod($consumo_rod): void
    {
        $this->consumo_rod = $consumo_rod;
    }

    public function getMarcha()
    {
        return $this->marcha;
    }

    public function setMarcha($marcha): void
    {
        $this->marcha = $marcha;
    }

    public function getTipTracao()
    {
        return $this->tip_tracao;
    }

    public function setTipTracao($tip_tracao): void
    {
        $this->tip_tracao = $tip_tracao;
    }

    public function getPorte()
    {
        return $this->porte;
    }

    public function setPorte($porte): void
    {
        $this->porte = $porte;
    }

    public function getOcupantes()
    {
        return $this->ocupantes;
    }

    public function setOcupantes($ocupantes): void
    {
        $this->ocupantes = $ocupantes;
    }

    public function getTipFreio()
    {
        return $this->tip_freio;
    }

    public function setTipFreio($tip_freio): void
    {
        $this->tip_freio = $tip_freio;
    }

    public function getTipVeiculo()
    {
        return $this->tip_veiculo;
    }

    public function setTipVeiculo($tip_veiculo): void
    {
        $this->tip_veiculo = $tip_veiculo;
    }

    public function getModeloIdmodelo()
    {
        return $this->modelo_idmodelo;
    }

    public function setModeloIdmodelo($modelo_idmodelo): void
    {
        $this->modelo_idmodelo = $modelo_idmodelo;
    }

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }


    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    public function setUsuarioIdusuario($usuario_idusuario): void
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }


}

