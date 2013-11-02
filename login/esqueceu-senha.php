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
		$mostrar_form = false;
		if(isset($_REQUEST['email'])){
			$email = $_REQUEST['email'];
			require_once("../class/class.login.php");
			$Login = new Login();
			$mostrar_form = $Login->existeEmail($email);
			$s = $Login->recuperaSenha($email);
			if($mostrar_form){
				$senha = $s[0]['senha'];
				echo "<strong>Sua senha é: <em>$senha</em></strong>";
			}else{
				echo "<strong>Email <em>$email</em> não encontrado na base de dados.</strong>";
			}
			unset($Login);
		}
		
		if(!$mostrar_form){
		?>
		<form name="frm-login" id="frm-login" action="" method="post">
			<h1>Esqueci minha senha</h1>
			<p>
				<label for="email">Digite seu e-mail:</label>
				<input type="text" name="email" id="email" value="" />
			</p>
			<p>
				<input type="submit" value="Enviar" />
			</p>
		</form>
		<?php
		}
		?>
		<p>
			<a href="index.php">Voltar a página de login</a>
		</p>
			
	</div>
</body>
</html>