<?php 
/**
* Clase que convierte de euros-dolares o dolares-euro
*/
class Conversor
{
	//Variable estaticas
	public static $F_EURO_DOLAR = 1.35;
	public static $F_DOLAR_EURO = 0.65;
	public $fTotal;
	public $infCant;
	/**
	 * constructor
	 */
	public function __construct(){}
	/**
	 * Metodo que convierte de euros a dolares
	 * @param  float $infCant 
	 * @return float          
	 */
	public static function convertirEuroADolar($infCant){
		$fTotal = $infCant * self::$F_EURO_DOLAR;
		return $fTotal;
	}

	/**
	 * Método que convierte de dolares a euro 		
	 * @param  float $infCant 
	 * @return float
	 */
	public static function convertirDolarAEuro($infCant){
		$fTotal = $infCant * self::$F_DOLAR_EURO;
		return $fTotal;
	}
}

echo Conversor::convertirDolarAEuro(150);






 ?>