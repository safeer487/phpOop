<?php  

/**
 * Los modelos llevan la lógica del sistema. Reciben instrucciones
 * y devuelven resultados. Y nada más.
 */

class ModeloIndex {

	var $propiedad;

	function a($parametro) {
		$this->propiedad = $parametro;
	}
}

class ModeloFAQ {

	var $propiedad_1;
	var $propiedad_2;

	function b($param1, $param2) {
		$this->propiedad_1 = $param1;
		$this->propiedad_2 = $param2;
	}
}

?>