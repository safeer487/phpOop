<?php  

/**
 * La vista debe hacer lo mínimo para encargarse de mostrar HTML al cliente.
 * Y nada más.
 */

function armar_diccionario($vista, $data) {
	$diccionario = array( 
		 'logo' => 'LABTOR',
		 'info' => 'Informacion',
		 'trabajadores' => 'Empleados',
		 'laboratiorIndex' => 'Laboratorios para supervillanos',
		 'pedir' => 'Pedir presupuesto',
		 'p1news' => 'Disponemos del arsenal más moderno. Desde armas de destrucción masiva, media, pequeñas, atómicas y dos estrellas de la muerte.',
		 'p2news' => '"Nunca me ha sido tan fácil realizar mis planes."',
		 'h3news' => 'Magneto',
		 'empFelices' => 'Empleados felices',
		 'dentro' => 'Ver por dentro',
		 'situacion' => 'Situación secreta',
		 'pFinalEmp'=>'Nuestras instalaciones están situadas en un volcán inactivo, en un emplazamiento secreto (20.6169377,-103.9452549)'
		);
	
	return $diccionario;
}

function render_data($vista, $data) {
	$html = '';
	if(($vista) && ($data)) {
		$diccionario = armar_diccionario($vista, $data);
		if($diccionario) {
			$html = file_get_contents('plantilla_' . $vista . '.html');
			foreach ($diccionario as $clave => $valor) {
				$html = str_replace('{' . $clave . '}', $valor, $html);
			}
		}
	}
	print $html;
}

?>