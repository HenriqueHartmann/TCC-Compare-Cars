<?php
/**
 * Created by PhpStorm.
 * User: Gean Carlos
 * Date: 04/06/2018
 * Time: 16:06
 */

class Comentario
{
    private $idcomentario;
    private $texto;
    private $data;
    private $usuario_idusuario;

    public function __construct($idcomentario = null, $texto, $data = null, $usuario_idusuario){
        $this->idcomentario = $idcomentario;
        $this->texto = $texto;
        $this->data = $data;
        $this->usuario_idusuario = $usuario_idusuario;
    }

    /**
     * @return mixed
     */
    public function getIdcomentario()
    {
        return $this->idcomentario;
    }

    /**
     * @param mixed $idcomentario
     */
    public function setIdcomentario($idcomentario)
    {
        $this->idcomentario = $idcomentario;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    /**
     * @param mixed $usuario_idusuario
     */
    public function setUsuarioIdusuario($usuario_idusuario)
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }


}