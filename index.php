<?php include 'header.php'; ?>
<?php 
	if (isset($_GET['mensaje'])){
		//Para prevenir XSS
		$mensaje = htmlspecialchars($_GET['mensaje'], ENT_QUOTES, 'UTF-8');
		echo "<div class='alert alert-warning fade in'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>";
        echo "$mensaje";
      	echo "</div>";
	}
?>
	<div class="row">
		<?php
			if(!($db=mysql_connect('localhost','root',''))){
				echo("Error con");
			}

			if(!mysql_select_db('db1150184',$db)){
				echo("Error al seleccionar la base de datos");
			}

			$query = "SELECT * FROM fotos";
			$result = mysql_query($query) or die ("falla en query");

			while($line = mysql_fetch_array($result,MYSQL_ASSOC)){
				$id = $line['id'];
				$titulo = $line['titulo'];
				$file = $line['file'];
				$descripcion = $line['descripcion'];


				echo "<div class='col-sm-6 col-md-3' style='margin-top:20px;'>
		    				<div class='thumbnail' style='height:280px;'>";
		    	echo "<a href='show.php?imagen_id=$id'>";
		    	echo "<img style='max-width:200px;max-height:200px;' src='imagenes/$file'>";
		    	echo "</a>";
		    	echo "<h3><a href='show.php?imagen_id=$id'>$titulo</a></h3>";
		    	// echo "<p>$descripcion</p>";
			    echo 		"</div>
			    		</div>";

			}
			mysql_free_result($result);
			mysql_close($db);
		?>
	</div>
<?php include 'bottom.php'; ?>