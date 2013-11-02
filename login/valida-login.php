<?php
require_once("../class/class.login.php");
$Login = new Login();
$usuario = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];
$login = $Login->validaLogin($usuario,$senha);

session_start();
unset($_SESSION['id']);
if($login){
	print_r($login);
	$_SESSION['id'] = $login[0]['id'];
	header("location:../carro/");
}else{
	header("location:index.php?log=true&tipo=1");
}


unset($Login);
?>