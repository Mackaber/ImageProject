<?php include 'header.php' ?>

	<?php
		if(!($db=mysql_connect('localhost','root',''))){
			echo("Error con");
		}

		if(!mysql_select_db('db1150184',$db)){
			echo("Error al seleccionar la base de datos");
		}

		$query = "SELECT * FROM productos";
		$result = mysql_query($query) or die ("falla en query");

		echo("<table border=1>");
		while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
			echo("<tr>");
			foreach($line as $col_value){
				echo("<td>");
					print("$col_value");
				echo("</td>");
			}
			echo("<td>");
				echo("<img src='imagenes/$col_value'");
			echo("</td>");
			echo("</tr>");
		}
		mysql_free_result($result);
		mysql_close($db);

	?>

<?php include 'bottom.php' ?>