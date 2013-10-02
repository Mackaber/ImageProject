<?php include 'header.php' ?>

<?php 

	$imagen = $_GET["imagen_id"];

	echo "$imagen";

	if(!($db=mysql_connect('localhost','root',''))){
		echo("Error con");
	}

	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$query = "SELECT * FROM fotos where id=$imagen";
	$result = mysql_query($query) or die ("falla en query");

	while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
		$file = $line['file'];
		echo "<img src='imagenes/$file' alt='...'>	";
	}

	mysql_free_result($result);
	mysql_close($db);

?>

      	<div class="row">
      	<!-- FOTO -->
		  <div class="col-sm-6 col-md-6">
		    <a href="#" class="thumbnail">
		      <img src="http://placehold.it/720x500" alt="...">
		    </a>
		  </div>
		  <div class="col-sm-6 col-md-6">
		  	<div class="pull-right">
				  <a href="#"><span class="glyphicon glyphicon-star" style="font-size: 30px;" ></span></a>
			</div>
			<br>
		  	<h3>Some Title</h3>
		  	<br>
		  	<p style="text-align:right">
		  		Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. 
		  		Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. 
		  		Curabitur blandit tempus porttitor. 
		  		Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		  	</p>
		  </div>
		</div>

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

<?php 

	$imagen = $_GET["imagen_id"];

	echo "$imagen";

	if(!($db=mysql_connect('localhost','root',''))){
		echo("Error con");
	}

	if(!mysql_select_db('db1150184',$db)){
		echo("Error al seleccionar la base de datos");
	}

	$query = "SELECT * FROM fotos where id=$imagen";
	$result = mysql_query($query) or die ("falla en query");

	while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
		$file = $line['file'];
		echo "<img src='imagenes/$file' alt='...'>	";
	}

	mysql_free_result($result);
	mysql_close($db);

?>

