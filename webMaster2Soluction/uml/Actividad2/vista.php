<?php  

/**
 * La vista debe hacer lo mínimo para encargarse de mostrar HTML al cliente.
 * Y nada más.
 */

function armar_diccionario($vista, $data) {
	$diccionario = array();
	//Dicionario identificarse
	if ($vista == 'identificarse' && $data->isError()) {
		$diccionario['mensajeError'] = $data->getMensajeError();
	}elseif($vista == 'identificarse'){
		$diccionario['mensajeError'] = '';
	}

	if ($vista == 'votar') {
		$diccionario['radioButtons'] = $data->generarHTMLOpciones();
	}
	
	return $diccionario;
}

function render_data($vista, $data) {
	$html = '';
	if(($vista) && ($data)) {
		$diccionario = armar_diccionario($vista, $data);
			$html = file_get_contents('plantilla_' . $vista . '.html');
			foreach ($diccionario as $clave => $valor) {
				$html = str_replace('{' . $clave . '}', $valor, $html);
			}
	}
	print $html;
}

?>