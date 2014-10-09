<?php 

/**
* objeto restaurante para Alberto Chicote
*/
class Restuarante 
{
	//variables
	private $sDireccion;
	private $sNom;
	private $iNumSocio;
	private $iNumEmpleados;
	private $iNumCliente;
	private $bAbierto;
	private $sFin;
	
	function __construct()
	{
		$this->sDireccion = 'Plaza españa 47';
		$this->sNom = 'Alberto';
		$this->iNumSocio = 454;
		$this->iNumEmpleados = 5;
		$this->iNumCliente = 110;
		$this->bAbierto = true;
	}
	/**
	 * Cambiar socio
	 * @param Int $insSocio [nuevo socio]
	 */
	function setSocio($insSocio){
		$this->iNumSocio = $insSocio;
	}
	/**
	 * Cambiar empleados
	 * @param Int $insEmpleados [nuevo empleados]
	 */
	function setEmpleados($insEmpleados){
		$this->iNumEmpleados = $insEmpleados;
	}
	/**
	 * Cambiar cliente
	 * @param Int $insCliente [nuevos cliente]
	 */
	function setCliente($insCliente){
		$this->iNumCliente = $insCliente;
	}
	/**
	 * Cambiar Abierto
	 * @param Int $insBabierto [abierto o no]
	 */
	function setAbierto($insBabierto){
		$this->bAbierto = $insBabierto;
	}
	public function getAbierto(){
		if ($this->bAbierto == true) {
			return "Restaurante es abierto";
		}else{
			return "Restaurante es cerrado";
		}
	}
	/**
	 * Metodo que devuelvo todo
	 * @return devueve todo
	 */
	function devolverTodo(){
		$sFin =
		 "Direccion: ".$this->sDireccion . "\n" 
		."Nombre: ". $this->sNom."\n"
		."Numero de Socios: ". $this->iNumSocio."\n" 
		."Numero de Empleados: ". $this->iNumEmpleados."\n"
		."Numero de Clientes: ". $this->iNumCliente. "\n"
		."Abierto: ". $this->getAbierto()."\n";
		return $sFin;
	}
}



$miRestaurante = new Restuarante();
$miRestaurante->setEmpleados(500);
$miRestaurante->setCliente();
$miRestaurante->setAbierto(false);

echo $miRestaurante->devolverTodo();







 ?>