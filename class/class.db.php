<?php
require_once("class.config.php");

class Db extends Config {
    
	public function __construct(){
		$this->conectarBanco();
	}
	
	private function conectarBanco(){
	   $this->conexao = mysql_connect($this->getServidor(),$this->getUsuario(),$this->getSenha());
	}
	
	public function executaSelect($sql){
		$r = mysql_query($sql,$this->conexao) or die(mysql_error($this->conexao));
		$ret = array();
		while($rs = mysql_fetch_assoc($r)){
			$ret[] = $rs;
		}
		return $ret;
	}
	
	private function fechaConexao(){
		mysql_close($this->conexao);
	}
	
	public function __destruct(){
		$this->fechaConexao();
	}

}

/*
testes para validar a classe
$Db = new Db();
$rs = $Db->executaSelect("select * from aplicacao.login where usuario = 'maria'");
echo '<pre>';
print_r($rs);
echo '</pre>';
unset($Db);
*/

?>