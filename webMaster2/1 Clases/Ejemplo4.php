<?php 

/**
* Clase de ejemplo con constructor y destructor
*/
class Usuario {
	
	public $sNom;
	/**
	 * Soy lo primero en ejecutarse cuando 
	 * se crea el objeto, justo después de
	 * declararse las variables
	 * @param [type] $insNom [description]
	 */
	function __construct($insNom){//($insNom) es un parametro de entrada
		//ejectuar primero 
		echo "Creando a " . $insNom . "\n";
		$this->sNom = $insNom;
	}

	/**
	 * Soy llamado cuando nadie más necesita este 
	 * objeto, antes de ser destruido
	 */
	function __destruct() {//lo va ultimo cuando quieremos destruir el codigo
	   echo "Destruyendo a " . $this->sNom . "\n";
	}
}

$miUsuario = new Usuario('Mozart');


?>