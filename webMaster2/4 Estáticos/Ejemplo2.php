<?php  

/** Metodos estáticos **/

class Panaderia
{
	//Variables
	public static $NOMBRE = 'Los manicos';
	private $iPanes;

	function __construct()
	{
		$this->iPanes = 45;
	}

	public function getPanes() 
	{
		return $this->iPanes;
	}

	public static function imprimirNombre() 
	{
		echo 'Su nombre es: ' . self::$NOMBRE . PHP_EOL; //Llamada dentro del propio objeto
	}
}

Panaderia::imprimirNombre(); //llamar el funcion que es estatic

?>