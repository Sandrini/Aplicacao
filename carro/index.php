<?php
require_once("../class/class.login.php");
$Login = new Login();
if(!$Login->estaLogado()){
	header("location:../login/?log=true&tipo=2");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	
</head>
<body>
  
	<div id="container">
		<h1>Carro</h1>
	</div>
</body>
</html>