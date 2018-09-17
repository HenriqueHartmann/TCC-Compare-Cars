<?php

	class Usuario
    {
		private $id_user;
		private $nome;
		private $email;
		private $senha;
		private $tip_user;

	public function __construct($nome = null, $email = null, $senha = null, $tip_user = null, $id_user = null)
	{
		$this->id_user = $id_user;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->tip_user = $tip_user;
	}

	public function getId()
	{
		return $this->id_user;
	}

	public function setId($id_user)
	{
		$this->id_user = $id_user;
	}

	public function getNome()
	{
		return $this->nome;
	}
	
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getTipuser()
    {
        return $this->tip_user;
    }

    public function setTipuser($tip_user)
    {
        $this->tip_user = $tip_user;
    }

}
?>