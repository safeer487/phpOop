<?php

//Diccionario de palabras
$diccionario = array( 
 'Título de la Página'=>'Apuestas Online', 
 'keywords'=>'apuestas, online, suerte, caballos, futbol', 
 'descripción'=>'Prueba suerte desde la comodidad de tu casa. Dinero fácil.',
 'Texto 1'=>'Nunca fue tan fácil conseguir dinero rápido, y legal.'
);


//Obtenemos la plantilla
$template = file_get_contents('plantilla.php');

//Sustituimos las palabras claves por las del diccionario
foreach ($diccionario as $clave=>$valor) { 
 $template = str_replace('{' . $clave . '}', $valor, $template); 
}

print $template;

?>