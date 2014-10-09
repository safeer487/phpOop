<?php 
/**
* Clientes Vip
*/
class Vip
{ 	
	/**
	 * Declaramos todos los variables
	 */
	private $sNom;
	private $sApellido;
	private $iTelefono;
	private $sDireccion;
	private $iNumTarjeta;
	private $iMes;
	private $iDia;
	private $iAnyo;
	private $sFecha;
	private $iAnyoActual;
	private $bError; 
	/**
	 * function construct
	 */
	public function __construct($insNom, $insApe,$iniTel,$insDic)
	{
		$this->sNom = $insNom;
		$this->sApellido = $insApe;
		$this->iTelefono = $iniTel;
		$this->sDireccion = $insDic;
		$this->iNumTarjeta = 123456789;
		$this->iMes = 1;
		$this->iDia = 1;
		$this->iAnyo = 1;
		$this->sFecha = $this->iDia . $this->iMes . $this->iAnyo;
		$this->iAnyoActual = 
		$this->bError = false;
	}
	/**
	 * Set nombre
	 * @param string $insNom nuevo nombre
	 */
	function setNom($insNom){
		$this->sNom = $insNom;
	}
	/**
	 * Set Apellido
	 * @param string $insApellido nuevo apellido
	 */
	function setApellido($insApellido){
		$this->sApellido = $insApellido;
	}
	/**
	 * Set telefono
	 * @param Int $insTelefono nuevo telefono
	 */
	function setTelefono($insTelefono){
		if(is_numeric($insTelefono) && strlen($insTelefono == 9)){
			$this->iTelefono = $insTelefono;
		}
	}
	/**
	 * Set direccion
	 * @param string $insDireccion nuevo direccion
	 */
	function setDireccion($insDireccion){
		$this->sDireccion = $insDireccion;
	}
	/**
	 * Set Numero de tarjeta
	 * @param Int $insNumTarjeta nuevo tarjeta
	 */
	function setNumTarjeta($insNumTarjeta){
		if(is_numeric($insNumTarjeta) && strlen($insNumTarjeta == 16)){
			$this->iNumTarjeta = $insNumTarjeta;
		}	
	}
	/**
	 * set fecha nacimiento
	 * @param int $insMess nuevo mess
	 * @param int $insDia  nuevo dia
	 * @param int $insAnyo nuevo anyo
	 */
	function setFechaNacimiento($insMes,$insDia,$insAnyo){
		if(checkdate($insMes,$insDia, $insAnyo)){
			$this->iMes = $insMes;
			$this->iDia = $insDia;
			$this->iAnyo = $insAnyo;
			$this->sFecha = $insDia .'-' . $insMes . '-' . $insAnyo;
		}
	}
	/**
	 * Método que imprime la informacion
	 * @return String 
	 */
	public function getInfo(){
		$sFin =
		'Nombre = '.$this->sNom. "\n".
		'Apellido = '.$this->sApellido. "\n".
		'Telefono = '. $this->iTelefono. "\n".
		'Direciion = '. $this->sDireccion. "\n".
		'Numero de Tarjeta = '.$this->iNumTarjeta. "\n".
		'Fecha de Nacimiento = '.$this->sFecha. "\n";
		return $sFin;

	}

}

$miLorena = new Vip('Lorena','Borghese','963214568','C/Falsa, 123');
$miLorena->setFechaNacimiento('11','7','1988');
echo $miLorena->getInfo();









 ?>