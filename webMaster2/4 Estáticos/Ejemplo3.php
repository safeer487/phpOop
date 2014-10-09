<?php  

/** Llamadas a estaticos de padres o propios **/

class CorteIngles {
	//Variable
	public static $NOMBRE = 'El corte ingles';
}

class Panaderia extends CorteIngles {
	//Variables
	public static $NOMBRE = 'Los manicos';
	private $iPanes;

	function __construct() {
		$this->iPanes = 45;
	}

	public function getPanes() {
		return $this->iPanes;
	}

	public function getNomCompanyia() {
		return parent::$NOMBRE;
	}

	public function getNomPanaderia() {
		return self::$NOMBRE;
	}
}

$miPanaderia = new Panaderia();
echo $miPanaderia->getNomCompanyia() . '<br>';
echo $miPanaderia->getNomPanaderia();

?>