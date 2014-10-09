<?php  

/**
 * La vista debe hacer lo mínimo para encargarse de mostrar HTML al cliente.
 * Y nada más.
 */

function armar_diccionario($vista, $data) {//Crear diccionario
	$diccionario = array( 
		 'Título de la Página index' => 'Apuestas Online', 
		 'keywords' => 'apuestas, online, suerte, caballos, futbol', 
		 'descripción' => 'Prueba suerte desde la comodidad de tu casa. Dinero fácil.',
		 'Texto 1' => 'Nunca fue tan fácil conseguir dinero rápido, y legal.',
		 'Título de la Página FAQ' => 'Preguntas frecuentes',
		 'Pregunta 1' => '¿Es legal?',
		 'Respuesta 1' => 'Si',
		 'Pregunta 2' => '¿Me vais a estafar?',
		 'Respuesta 2' => 'Todo indica que si. Digo... no.'
		);
	
	return $diccionario;
}

function render_data($vista, $data) {//$data realmente es una vista
	$html = '';
	if(($vista) && ($data)) {
		$diccionario = armar_diccionario($vista, $data);//vista es un get
		if($diccionario) {
			$html = file_get_contents('plantilla_' . $vista . '.html');
			foreach ($diccionario as $clave => $valor) {
				$html = str_replace('{' . $clave . '}', $valor, $html);
			}
		}
	}
	print $html;//print $html es lo que hace imprime todo 
}

?>