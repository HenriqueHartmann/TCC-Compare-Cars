<?php

    require_once "Montadora.php";
    require_once "DBConexao.php";

class CrudMontadora
{
    private $conexao;

    public function __construct(){
        $this->conexao = DBConexao::getConexao();
    }
    public function getMontadoras(){
        $sql = "SELECT * FROM montadora";
        $resultado = $this->conexao->query($sql);
        $montadoras = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($montadoras as $montadora) {
            $id = $montadora['idmontadora'];
            $nome = $montadora['montadora'];
            $obj = new Montadora($id, $nome);
            $listaMontadoras[] = $obj;
        }
        return $listaMontadoras;
    }

    public function getMontadora($id){
        $sql = "SELECT * FROM montadora WHERE idmontadora =" . $id;
        $resultado = $this->conexao->query($sql);
        $montadora = $resultado->fetch(PDO::FETCH_ASSOC);
        $id = $montadora['idmontadora'];
        $nome = $montadora['montadora'];
        $objUser = new Montadora($id,$nome);
        return $objUser;
    }

    public function getMontName(){
        $sql = "SELECT * FROM montadora";
        $resultado = $this->conexao->query($sql);
        $montadoras = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $montadoras;
    }
}