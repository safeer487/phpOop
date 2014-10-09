<?php 

//Nativo con PDO
//UPDATE, INSERT, DELETES... todo lo que no devuelve datos
$miBD = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
//$miBD->query("INSERT INTO productos VALUES (NULL, 'zapatos');");

//SELECT: consultas
foreach($miBD->query('SELECT * FROM productos') as $row) {
        //print_r($row);
        echo $row['nombre'];
        echo $row['id'];
    }

//Nativo MySQL
$miMySQLi = new mysqli("localhost", "root", "", "tienda");
$miMySQLi->query("INSERT INTO productos VALUES (NULL, 'camisa');");

?>