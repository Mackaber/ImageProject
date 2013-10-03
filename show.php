<?php include 'header.php' ?>

<?php 

	$imagen = $_GET["imagen_id"];
	$current_user_id = $_SESSION['user_id'];

	if(!($db=mysql_connect('localhost','root',''))){
		echo("Error con");
	}

	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$query = "SELECT * FROM fotos where id=$imagen";
	$result = mysql_query($query) or die ("falla en query");


	echo "<div class='row'>";
	while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
		$id = $line['id'];
		$file = $line['file'];
		$titulo = $line['titulo'];
		$descripcion = $line['descripcion'];
		$user_id = $line['user_id'];

		echo "<div class='col-sm-6 col-md-6'>
		    	<a class='thumbnail'>";
		echo "<img src='imagenes/$file' alt='...'>	";
		echo "	</a>
		  	 </div>";
		echo "<div class='col-sm-6 col-md-6'>";
		echo "<div class='pull-right'>";
		echo "<div class='row'>";
		if ($_SESSION['logged']){
			//Si es dueño de la imagen la puede borrar
			if ($_SESSION['logged'] && ($_SESSION['user_id'] == $user_id)) {
				echo "<a class='btn btn-danger col-md-8' href='delete.php?foto_id=$imagen'>DELETE</a>";
			}

			//Funcion para saber si la imagen esta favoriteada
			$query2 = mysql_query("SELECT id FROM favoritos where user_id=$current_user_id AND foto_id=$id LIMIT 1");
			$result2 = mysql_fetch_array($query2);

			if($result2[0] > 0){
				echo "<a class='col-md-1' href='favorite.php?foto_id=$imagen'><span class='glyphicon glyphicon-star' style='font-size: 30px;' ></span></a>";
			}else{
				echo "<a class='col-md-1' href='favorite.php?foto_id=$imagen'><span class='glyphicon glyphicon-star-empty' style='font-size: 30px;' ></span></a>";
		
			}
		}
		echo 	  "</div>";
		echo "</div>";
		echo "<br>";
		echo "<h3>$titulo</h3>";
		echo "<br>";
		echo "<p style='text-align:right'>$descripcion</p>";
		echo "</div>";

	}
	echo "</div>";

	mysql_free_result($result);
	mysql_close($db);

?>

<h3 class="pull-left">Comentarios</h3>
	  	<br>
			<div>
		  		<form action="submit_comment.php" method="post" >
		  			<textarea name="comentario" class="form-control" rows="3"></textarea>
		  			<?php
		  				$imagen = $_GET["imagen_id"]; 
		  				echo "<input type='hidden' value='$imagen' name='foto_id' >" 
		  			?>
		  			<br>
		  			<button class="btn btn-default pull-left">Comentar</button>
		  		</form>
		  	</div>
	  	<br>
	  	<br>
	  	<div>
		  	<table class="table" style="text-align:left;">
		  		<?php
		  			$imagen = $_GET["imagen_id"];

			  		if(!($db=mysql_connect('localhost','root',''))){
						echo("Error con");
					}

					if(!mysql_select_db('db1150184',$db)){
						echo("Error al seleccionar la base de datos");
					}
					$query = "SELECT * FROM comentarios where foto_id=$imagen";
					$result = mysql_query($query) or die ("falla en query");

					while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
						$user_id = $line['user_id'];
						$comentario = $line['comentario'];

						$query2 = mysql_query("SELECT nombre FROM usuarios where id=$user_id");
						$result2 = mysql_fetch_array($query2);
						$username = $result2[0];

				  		echo "<tr>";
				  		echo "<td><h4>$username</h4></td>";
				  		echo 	"<td>";
				  		echo 		"<p>$comentario</p>";
				  		echo 	"</td>";
				  		echo "</tr>";
			  		}
		  		?>
		  	</table>
	  	</div>	
	  </div>
	</div>		

<?php include 'bottom.php'; ?>
