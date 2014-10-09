<?php

//Diccionario de palabras
$diccionario = array( 
 'firstLink'=>'Inicio', 
 'examplePages'=>'Paginia del ejemplo', 
 'exampleLink1'=>'Blog',
 'exampleLink2'=>'Blog unica pagina',
 'exampleLink3'=>'Pagina del producto',
 'exampleLink4'=>'Producto unico',
 'exampleLink5'=>'Pagina de Contacto',
 'secondLink' => 'Galeria',
 'heading'=>'Bienvenido a high fashion',
 


);


//Obtenemos la plantilla
$template = file_get_contents('plantilla.html');//recoge todo los contenidos.

//Sustituimos las palabras claves por las del diccionario
foreach ($diccionario as $clave=>$valor) { 
 $template = str_replace('{' . $clave . '}', $valor, $template); 
}

print $template;

?>