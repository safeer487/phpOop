<?php  

/** Declarar propiedades o métodos de clases como estáticos los hacen accesibles sin la necesidad de instanciar la clase. 

Por motivos de compatibilidad con PHP 4, son siempre public.

No pueden ser accedidas a través del objeto utilizando el operador flecha (->).

**/

class Panaderia
{
	//Variables
	public static $NOMBRE = 'Los manicos';
	private $iPanes;

	function __construct()
	{
		$this->iPanes = 45;
	}

	public function getPanes() {
		return $this->iPanes;
	}
}

echo Panaderia::$NOMBRE;

?>