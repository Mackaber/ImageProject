<?php
	session_start();

	$user_id = $_SESSION['user_id'];
	$foto_id = $_GET['foto_id'];

	if(!($db = mysql_connect('localhost','root',''))){
		echo("Error en conexion");
	}
	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$query2 = mysql_query("SELECT id FROM favoritos where user_id=$user_id AND foto_id=$foto_id LIMIT 1");
	$result2 = mysql_fetch_array($query2);
	$id = $result2[0];

	if(isset($id)){
		$query = "DELETE FROM favoritos WHERE id=$id";
		$result = mysql_query($query) or die ("Error");
	}else{
		$query = "INSERT INTO favoritos (foto_id,user_id) values($foto_id,$user_id)";
		$result = mysql_query($query) or die ("Error");	
	}

	mysql_close($db);
	header("Location: show.php?imagen_id=".$foto_id); 
?>