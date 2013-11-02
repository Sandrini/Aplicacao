<?php

class Config {

	private $servidor = "localhost";
	private $usuario  = "root";
	private $senha    = "";
	private $banco    = "aplicacao";
	
	public function getServidor(){
		return $this->servidor;
	}
	
	public function getSenha(){
		return $this->senha;
	}

	public function getUsuario(){
		return $this->usuario;
	}
	
	public function getBanco(){
		return $this->banco;
	}
	
}

?>