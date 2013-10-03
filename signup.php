<?php 

	if(!($db=mysql_connect('localhost','root',''))){
		echo("Error con");
	}

	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$mail = mysql_real_escape_string($_POST['email']);
	$user = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password_conf = mysql_real_escape_string($_POST['password_confirm']);
	//Check if mail exists
	$user_exists = "SELECT * FROM usuarios where mail='$mail'";
	$result = mysql_query($user_exists) or die ("falla en query");

	if(mysql_fetch_array($result,MYSQL_ASSOC) < 1){
		if ($password == $password_conf) {
			$enc_pass = hash('sha256', mysql_real_escape_string($password)); 
			$query = "INSERT into usuarios (nombre,password,mail) values ('$user','$enc_pass','$mail')";
			$result = mysql_query($query) or die ("Error");
		}else{
			header("Location: error.php?error=Las contraseñas no coinciden"); 
		}
	}
	else {
		header("Location: error.php?error=Este email ya ha sido registrado"); 
	}

?>