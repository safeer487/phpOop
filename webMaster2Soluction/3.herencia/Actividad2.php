<?php 
/**
* Class vehiculo
*/
class Vehiculo
{
	/*Declaramos variables*/
	protected $sColor;
	protected $sMarca ;
	protected $iRuedas;
	protected $iPassageros;

	public function __constructor() {

	} 

	/**
	 * Get todo
	 */
	function getTodo(){
		
	}
}

/**
*Class coche 
*/
class coche extends Vehiculo
{
	/*Declaramos variables*/
	private $bRadio;
	private $iPuertas;

	public function __constructor() {
		$this->bRadio = true;
		$this->iPuertas = 5;

	}
	/**
	 * Sets
	 */
	//Set color
	public function setColor($insColor){
		$this->sColor = $insColor;
		return $insColor;
	}
	/**
	 * Set Marca
	 * @param String $insMarca
	 */
	public function setMarca($insMarca){
		$this->sMarca = $insMarca;
		return $insMarca;
	}
	/**
	 * Set Ruedas
	 * @param Int $iniRuedas 
	 */
	public function setRuedas($iniRuedas){
		$this->iRuedas = $iniRuedas;
		return $iniRuedas;
	}
	/**
	 * Set Passagers
	 * @param Int $iniPassageros 
	 */
	public function setPassageros($iniPassageros){
		$this->iPassageros = $iniPassageros;
		return $iniPassageros;
	}
	/**
	 * Set Radio
	 * @param Boolean $inbRadio 
	 */
	public function setRadio($inbRadio){
		$this->bRadio = $inbRadio;
		if($inbRadio == true){
			return "Si que tiene radio";
		}else{
			return "No tiene radio";
		}
	}
	/**
	 * Set puertas
	 * @param Int $insPuertas 
	 */
	public function setPuertas($insPuertas){
		$this->iPuertas = $insPuertas;
		return $insPuertas;
	}

	function getTodo(){
		$sFin =
		'Color: '.$this->sColor."\n".
		'Marca: '.$this->sMarca."\n".
		'Ruedas: '.$this->iRuedas."\n".
		'Passageros: '.$this->iPassageros."\n".
		'Radio: '.$this->bRadio."\n".
		'Puertas: '.$this->iPuertas;
		return $sFin;
	}
}
/**
* Moto
*/
class Moto extends Vehiculo
{
	//Declaramos variable
	private $iCilindrada;

	/**
	 * Construct
	 */
	public function __constructor(){
	$this->iCilindrada = true;
	}
	/**
	 * Sets
	 */
	/**
	 * Set Cilindrada
	 * @param  Boolean $inbCilindrada 
	 * @return Boolean                
	 */
	public function setbCilindrada($iniCilindrada){
		$this->iCilindrada = $iniCilindrada;
		if($inbCilindrada == true){
			return 'El Moto esta cilindrada';
		}
	} 
	/**
	 * Set Marca
	 * @param String $insMarca
	 */
	public function setMarca($insMarca){
		$this->sMarca = $insMarca;
		return $insMarca;
	}
	/**
	 * Set color
	 * @param string $insColor 
	 */
	public function setColor($insColor){
		$this->sColor = $insColor;
		return $insColor;
	}
	function getTodo(){
		$sFin =
		'Color: '. $this->sColor . "\n" .
		'Marca: '. $this->sMarca . "\n" .
		'Cilindrada: ' $this->iCilindrada . 
		return $sFin;
	}


	
}

$miCoche = new coche();
$miCoche->setColor('Red');
$miCoche->setMarca('Renault');
$miCoche->setRuedas(4);
$miCoche->setPuertas(5);
$miCoche->setPassageros(5);
$miCoche->setRadio(true);

echo $miCoche->getTodo();








 ?>