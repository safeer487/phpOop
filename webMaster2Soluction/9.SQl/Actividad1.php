<?php 
require_once 'BD.class.php';
$miDb = new DB();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css" media="screen">

	form{
		margin-left: 200px;
	}
	input.input{
		padding:5px;
	}
	h2{
		color:orange;
	}
	input.enviar{
		color:orange;
		text-align:center;
	}

		
	</style>
</head>
<body>
	<?php 
	$iE1 = '';
	$iE2 = '';
	if(isset($_GET['error'])){
		switch ($_GET['error']) {
			case 1:
				$iE1 = "Los campos no pueden estar vacio";
				break;
			
			case 2:
				$iE2 = "Anyo incorrecto";
				break;
		}
	}

	 ?>
	
	<form action="Actividad1_process.php" method="post">
		<?php echo $iE1."<br>"; ?>
		<?php echo $iE2."<br>"; ?>
		<h2>Peliculas </h2>
		<input class="input" type="text" name="pelicula" placeholder="Pelicula"><br>
		<input class="input" type="text" name="anyo" placeholder="anyo"><br>
		<input class="enviar" type="submit" value="añadir">
		
	</form>	

	<div id="resultado">
		<?php
		$sSQL = "SELECT pelicula,anyo FROM pelicula ORDER BY anyo ASC";
		$aResultado = $miDb->obtenerResultado($sSQL);
		foreach ($aResultado as $key => $value) {
			echo '<li>'.$value['pelicula'].' - '.$value['anyo']. '</li>';
		}

		 ?>

	</div>
</body>
</html>