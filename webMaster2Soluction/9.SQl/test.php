<?php 

require_once 'BD.class.php';

$miDB = new DB();
/*$miDB->ejecutarQuery("INSERT INTO animales VALUES ('','perdigon')");*/
/*$aResultados = $miDB->obtenerResultado("SELECT * FROM animales");*/

echo $miDB->contarResultadosQuery("SELECT * FROM animales");

/*foreach ($aResultados as $value) {
	echo utf8_decode($value['nombre']).'<br>';
}*/

 ?>