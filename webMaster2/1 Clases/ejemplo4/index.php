<?php 

/** Autocargador de librerias **/
spl_autoload_register('autocargador');

function autocargador($insNom)
{
	include $insNom . '.class.php';
}


/**
* Clase que carga una librería
*/
class HolaMundo
{
	public $miRestaurante = null;

	function __construct()
	{
		$this->miRestaurante = new Restaurante();
		echo $this->miRestaurante->iNum;
	}
}	


new HolaMundo();


?>