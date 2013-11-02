<?php
require_once("../class/class.db.php");
class Login extends Db {

	public function validaLogin($usuario,$senha){
		$rs = $this->executaSelect("select * from aplicacao.login where usuario = '$usuario' and senha = '$senha'");
		return $rs;
	}
	
	public function estaLogado(){
		@session_start();
		return $_SESSION['id']>0?true:false;
	}
	
	public function existeEmail($email){
		$rs = $this->recuperaSenha($email);
		return count($rs)==0?false:true;
	}
	
	public function recuperaSenha($email){
		$rs = $this->executaSelect("SELECT senha FROM aplicacao.login WHERE email = '$email'");
		return $rs;
	}

}

/* testes
$Login = new Login();
if($Login->validaLogin("sandrini","teste")){
	echo "Validou";
}else{
	echo "Não validou";
}
echo '<pre>',print_r($Login),'</pre>';
*/
?>