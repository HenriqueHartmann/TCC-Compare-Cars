<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 19/06/18
 * Time: 08:29
 */

    require_once 'DBConexao.php';
    require_once 'Comentario.php';

class CrudComentario
{
    private $conexao;

    public function __construct(){
        $this->conexao = DBConexao::getConexao();
    }

    public function getComentario($id){
        $sql = "SELECT * FROM comentario WHERE idcomentario=".$id;
        $result = $this->conexao->query($sql);
        $coment = $result->fetch(PDO::FETCH_ASSOC);
        $objcoment = new Comentario($coment['idcomentario'], $coment['texto'], $coment['data'], $coment['usuario_idusuario']);
        return $objcoment;
    }

    public function getComentarios(){
        $sql = "SELECT * FROM comentario";
        $result = $this->conexao->query($sql);
        $comentarios = $result->fetchAll(PDO::FETCH_ASSOC);
        foreach ($comentarios as $comentario){
            $idcoment = $comentario['idcomentario'];
            $texto = $comentario['texto'];
            $data = $comentario['data'];
            $iduser = $comentario['usuario_idusuario'];
            $obj = new Comentario($idcoment, $texto, $data, $iduser);
            $listacomentarios[] = $obj;
        }
        return $listacomentarios;
    }

    public function getUsuario($id){
        $sql = "SELECT email FROM usuario WHERE idusuario =".$id;
        $result = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);
            $autor = $result['email'];
            $obj = new Usuario(null,$autor,null,null,$id);
        return $obj->getEmail();

    }

    public function insertComentario(Comentario $comentario){
        $sql = "INSERT INTO comentario (texto, usuario_idusuario) VALUES ('{$comentario->getTexto()}','{$comentario->getUsuarioIdusuario()}')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteComentario($id){
        $sql = "DELETE FROM comentario WHERE idcomentario=".$id;
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function verificaComentario(Comentario $comentario){
        if (strlen($comentario->getNome()) >=5 && strlen($comentario->getNome()) <= 50){
            if (strlen($comentario->setTexto()) >=1 && strlen($comentario->getTexto()) <=500){
                return $this->getComentario($comentario);
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}