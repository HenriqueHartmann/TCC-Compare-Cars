<?php

    require_once "Usuario.php";
    require_once "DBConexao.php";

    class CrudUsuario
    {
        private $conexao;

        public function __construct()
        {
            $this->conexao = DBConexao::getConexao();
        }

        public function getUsuarios()
        {
            $sql = "SELECT * FROM usuario";
            $resultado = $this->conexao->query($sql);
            $usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            foreach ($usuarios as $usuario) {
                $id = $usuario['idusuario'];
                $nome = $usuario['nome'];
                $email = $usuario['email'];
                $senha = $usuario['senha'];
                $tipo = $usuario['tip_usuario'];
                $obj = new Usuario($nome, $email, $senha, $tipo, $id);
                $listaUsuarios[] = $obj;
            }
            return $listaUsuarios;
        }

        public function getUsuario($id)
        {
            $sql = "SELECT * FROM usuario WHERE idusuario =" . $id;
            $resultado = $this->conexao->query($sql);
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            $id = $usuario['idusuario'];
            $nome = $usuario['nome'];
            $email = $usuario['email'];
            $senha = $usuario['senha'];
            $tipo = $usuario['tip_usuario'];
            $objUser = new Usuario($nome, $email, $senha, $tipo, $id);
            return $objUser;
        }

        public function insertUsuario(Usuario $user)
        {

            $this->conexao = DBConexao::getConexao();

            $sql = "INSERT INTO usuario (nome, email, senha, tip_usuario) VALUES ('{$user->getNome()}','{$user->getEmail()}','{$user->getSenha()}','{$user->getTipuser()}')";
            try {
                $this->conexao->exec($sql);
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function updateUsuario(Usuario $user)
        {
            $sql = "UPDATE usuario SET nome ='{$user->getNome()}', email ='{$user->getEmail()}', senha = '{$user->getSenha()}', tip_usuario ='{$user->getTipuser()}' WHERE idusuario=".$user->getId();
            try{
                $this->conexao->exec($sql);
            }catch (PDOException $e){
                return $e->getMessage();
            }
        }

        public function excluirUsuario($codigo)
        {
            $sql = "DELETE FROM usuario WHERE idusuario=".$codigo;
            try{
                $this->conexao->exec($sql);
            }catch (PDOException $e){
                return $e->getMessage();
            }
        }

        public function verificaTipo($user)
        {
            $sql = "SELECT idusuario, tip_usuario FROM usuario WHERE email = '{$user->getEmail()}' AND senha = '{$user->getSenha()}'";
            $resultado = $this->conexao->query($sql);
            $info = $resultado->fetch(PDO::FETCH_ASSOC);

            $objInfo = new Usuario($info['idusuario'], $info['email'], $info['senha'], $info['tip_usuario'], $info['nome']);
            $tipo = $objInfo->getTipuser();
            return $tipo;
        }

        public function existeUser($user)
        {
               $sql = $this->conexao->prepare("SELECT idusuario, email, senha, tip_usuario, nome FROM usuario WHERE email = '{$user->getEmail()}'");
               $sql->execute();
               $count = $sql->rowCount();
            try {
                return $count;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function loginUser(Usuario $user)
        {
               $sql = $this->conexao->prepare("SELECT idusuario, email, senha, tip_usuario, nome FROM usuario WHERE email = '{$user->getEmail()}' AND senha = '{$user->getSenha()}'");
               $sql->execute();
               $count = $sql->rowCount();
            try {
                return $count;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

        public function descobreId($user)
        {
            $sql = "SELECT idusuario, email, senha, tip_usuario, nome FROM usuario WHERE email = '{$user->getEmail()}' AND senha = '{$user->getSenha()}'";
            $resultado = $this->conexao->query($sql);
            $info = $resultado->fetch(PDO::FETCH_ASSOC);

            $objInfo = new Usuario($info['nome'], $info['email'], $info['senha'], $info['tip_usuario'], $info['idusuario']);
            return $objInfo->getId();
        }
    }