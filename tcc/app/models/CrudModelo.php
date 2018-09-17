<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 10/08/2018
 * Time: 14:07
 */

    require_once "DBConexao.php";
    require_once "Modelo.php";

class CrudModelo
{
    private $conexao;

    public function __construct(){
        $this->conexao = DBConexao::getConexao();
    }

    public function getModelo($idmodelo){
        $sql = "SELECT * FROM modelo WHERE idmodelo = '{$idmodelo}'";
        $resultado = $this->conexao->query($sql);
        $modelo = $resultado->fetch(PDO::FETCH_ASSOC);
        $nomemod = $modelo['nome_modelo'];
        $objMod = new Modelo(null, $nomemod, null);
        return $objMod;
    }

    public function getModelos(){
        $sql = "SELECT * FROM modelo";
        $resultado = $this->conexao->query($sql);
        $modelos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($modelos as $modelo) {
            $idmodelo = $modelo['idmodelo'];
            $nomemodelo = $modelo['nome_modelo'];
            $montadora_idmontadora = $modelo['montadora_idmontadora'];
            $obj = new Modelo($idmodelo, $nomemodelo, $montadora_idmontadora);
            $listaModelos[] = $obj;
        }
        return $listaModelos;
    }

    public function getModelName(){
        $sql = "SELECT * FROM modelo";
        $resultado = $this->conexao->query($sql);
        $modelos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $modelos;
    }

    public function insertModelo(Modelo $modelo){

        $this->conexao = DBConexao::getConexao();

        $sql = "INSERT INTO modelo (idmodelo, nome_modelo, montadora_idmontadora) VALUES ('{$modelo->getIdmodelo()}', '{$modelo->getNomemodelo()}', '{$modelo->getMontadoraIdmontadora()}',)";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateModelo(Modelo $modelo){

        $sql = "UPDATE modelo SET idmodelo ='{$modelo->getIdmodelo()}', nome_modelo ='{$modelo->getNomemodelo()}', montadora_idmontadora ='{$modelo->getMontadoraIdmontadora()}' WHERE idmodelo=".$modelo->getIdmodelo();
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function  deleteModelo($id){
        $sql = "DELETE FROM modelo WHERE idmodelo =".$id;
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }
};