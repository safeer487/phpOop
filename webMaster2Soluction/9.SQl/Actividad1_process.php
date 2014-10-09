<?php 
require_once 'BD.class.php';
$miDb = new DB();

if(!$_POST){
	header('Location: Actividad1.php');
	exit;
}

//recogemos variables
$sPelicula = $_POST['pelicula'];
$iAnyo = $_POST['anyo'];
$iError = 0;
$sSQL = "INSERT INTO pelicula VALUES(null,'$sPelicula','$iAnyo')";

/**
 * Comprobaciones
 */
//no pueden estar vacios
if($sPelicula == '' || $iAnyo == '') $iError = 1;
//no puede tener letras
if(!is_numeric($iAnyo)) $iError = 2;

if($iError != 0){
	header('Location: Actividad1.php?error='.$iError);
	exit;
}else{
	
	$miDb->ejecutarQuery($sSQL);
	header('Location:Actividad1.php?nuevo=1');
	exit;
}








 ?>