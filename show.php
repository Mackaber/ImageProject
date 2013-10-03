<?php include 'header.php' ?>

<?php 

	$imagen = $_GET["imagen_id"];

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
		if ($_SESSION['user_id'] == $user_id) {
			echo "<a class='btn btn-danger col-md-8' href='delete.php?foto_id=$imagen'>DELETE</a>";
		}

		echo	 "<a class='col-md-1' href='#'><span class='glyphicon glyphicon-star' style='font-size: 30px;' ></span></a>";
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

<br>  	
	  	<h3 class="pull-left">Comentarios</h3>
	  	<br>
			<div>
		  		<form>
		  			<textarea class="form-control" rows="3"></textarea>
		  			<br>
		  			<button class="btn btn-default pull-left">Comentar</button>
		  		</form>
		  	</div>
	  	<br>
	  	<br>
	  	<div>
		  	<table class="table">
		  		<tr>
		  			<td><h4>Comenter</h4></td>
		  			<td>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. 
		  				Curabitur blandit tempus porttitor. 
		  				Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
		  				Cras mattis consectetur purus sit amet fermentum. 
		  				Donec ullamcorper nulla non metus auctor fringilla.
		  			</td>
		  		</tr>
		  	</table>
	  	</div>	
	  </div>
	</div>	

<?php include 'bottom.php'; ?>
