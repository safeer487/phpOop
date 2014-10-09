<?php 
/*Conexion a base de datos*/
$miBD = new PDO('mysql:host=localhost;dbname=caballos', 'root', '');

foreach($miBD->query('SELECT * FROM establos') as $row) {
        //print_r($row);
        echo $row['nombre'];
        echo $row['id'];
    }



 ?>