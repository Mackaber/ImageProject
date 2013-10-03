<?php 
	session_start();

	if(!($db = mysql_connect('localhost','root',''))){
					echo("Error en conexion");
		}
		if(!mysql_select_db('db1150184',$db)){
			echo("Error al seleccionar la base de datos");
		}
	
	$query2 = mysql_query("SELECT user_id FROM fotos where id=$_GET[foto_id]");
	$result2 = mysql_fetch_array($query2);
	$user_id = $result2[0];

	// echo $result2[0];
	// echo $_SESSION['user_id'];

	if ($_SESSION['user_id'] == $user_id){
		$query = "DELETE FROM fotos WHERE id=$_GET[foto_id]";
		$result = mysql_query($query) or die ("Error");

		// mysql_free_result($result);
		mysql_close($db);	

		header("Location: index.php?mensaje=Su imagen ha sido borrada"); 
	}else{
		header("Location: index.php?mensaje=Esta foto no le pertenece"); 	
	}
?>