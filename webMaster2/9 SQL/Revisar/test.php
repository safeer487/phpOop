<?php 

require "BD.class.php";
$miDB = new DB();
$miDB->DB_NOM = 'tienda';
$miDB->ejecutarQuery("INSERT INTO productos VALUES (NULL, 'relojes');");

?>