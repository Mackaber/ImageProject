<?php 
	session_start();

	$user_id = $_SESSION['user_id'];
	$foto_id = $_POST['foto_id'];
	$comentario = $_POST['comentario'];


	if(!($db = mysql_connect('localhost','root',''))){
		echo("Error en conexion");
	}
	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$query = "INSERT INTO comentarios (comentario,foto_id,user_id) values('$comentario',$foto_id,$user_id)";
	$result = mysql_query($query) or die ("Error");

	mysql_close($db);
	header("Location: show.php?imagen_id=".$foto_id); 

?>