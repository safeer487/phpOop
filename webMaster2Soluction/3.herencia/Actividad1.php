<?php 

/**
* Clase del padre
*/
class Manolo
{
	private $sNom = 'Manolo'; 
	protected $sApellido = 'Gonzales';
	private $iEdad = 70;
	protected $sSangre = 'B+';
	/**
	 * Set edad
	 * @param Int $iniEdad 
	 */
	public function setEdad($iniEdad){
		$this->iEdad = $iniEdad;
	}
	/**
	 * Set nombre
	 * @param string $insNom 
	 */
	public function setNombre($insNom){
		$this->sNom = $insNom;
	}
	public function getNomYEdad(){
		$sFin =
		'Nombre :' .$this->sNom.' '.$this->sApellido."\n".
		'Edad :' . $this->iEdad."\n";
		return $sFin;
	}

}
/**
* hijo del manolo
*/
class Borja extends Manolo
{
	private $sNom = 'borja';
	private $iEdad = '30';
		/**
	 * Set edad
	 * @param Int $iniEdad 
	 */
	public function setEdad($iniEdad){
		$this->iEdad = $iniEdad;
	}
	/**
	 * Set nombre
	 * @param string $insNom 
	 */
	public function setNombre($insNom){
		$this->sNom = $insNom;
	}
	/**
	 * Get Nomre y edad
	 * @return String
	 */
	public function getNomYEdad(){
		$sFin =
		'Nombre :' .$this->sNom.' '.$this->sApellido."\n".
		'Edad :' . $this->iEdad."\n";
		return $sFin;
	}

}
/**
* hijo de manolo
*/
class Felipe extends Manolo
{
	private $sNom = 'Felipe';
	private $iEdad = '20';
		/**
	 * Set edad
	 * @param Int $iniEdad 
	 */
	public function setEdad($iniEdad){
		$this->iEdad = $iniEdad;
	}
	/**
	 * Set nombre
	 * @param string $insNom 
	 */
	public function setNombre($insNom){
		$this->sNom = $insNom;
	}
	public function getNomYEdad(){
		$sFin =
		'Nombre :' .$this->sNom.' '.$this->sApellido."\n".
		'Edad :' . $this->iEdad."\n";
		return $sFin;
	}

}

$miPadre = new Manolo();
$miHijo = new Borja();
$miHijo2 = new Felipe();

echo $miPadre->getNomYEdad();
echo $miHijo->getNomYEdad();





 ?>