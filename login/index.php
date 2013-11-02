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
		<?php
		
		if(isset($_GET['log'])){
			session_start();
			if(!isset($_SESSION['id'])||!$_SESSION['id']>0){
				if($_GET['tipo']==2){
					?><p><strong>Sua sessão expirou</strong></p><?php
				}else{
					?><p><strong>Senha inválida</strong></p><?php
				}
			}
		}
		
		?>
		<form name="frm-login" id="frm-login" action="valida-login.php" method="post">
			<h1>Login</h1>
			<p>
				<label for="usuario">usuario:</label>
				<input type="text" name="usuario" id="usuario" value="" />
			</p>
			<p>
				<label for="senha">senha:</label>
				<input type="password" name="senha" id="senha" value="" />
			</p>
			<p>
				<input type="submit" value="Enviar" />
			</p>
			<p>
				<a href="esqueceu-senha.php">Esqueci minha senha</a>
			</p>
		</form>
	</div>
</body>
</html>