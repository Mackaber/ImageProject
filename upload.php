<?php	

	session_start();
	
	$userfile = $_FILES[userfile];
	$filename = $userfile['name'];
	$user_id = $_SESSION['user_id'];

	move_uploaded_file($_FILES[userfile][tmp_name],"imagenes/".$filename);

	if(!($db = mysql_connect('localhost','root',''))){
		echo("Error en conexion");
	}
	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}
	// echo $_POST[titulo]."\n\n";
	// echo $_POST[descripcion]."\n\n";
	// echo $filename."\n\n";

	$query = "INSERT INTO fotos(titulo,descripcion,file,user_id) values('$_POST[titulo]','$_POST[descripcion]','$filename',$user_id)";
	$result = mysql_query($query) or die ("Error");

	$query2 = mysql_query("SELECT id FROM fotos ORDER BY id DESC LIMIT 1");
	$result2 = mysql_fetch_array($query2);
	$id = $result2[0];

	//mysql_free_result($result);
	mysql_close($db);
	header("Location: show.php?imagen_id=".$id); 
?>
