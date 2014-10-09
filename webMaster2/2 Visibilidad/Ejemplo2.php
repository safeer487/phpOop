<?php 

/**
* Clase ejemplo con variables
*/
class Fabrica
{
	//Variables
	private $sNom;
	private $iNumEmp;
	private $sDireccion;

	function __construct()//en construct nos podemos solo guardar los variables no podemos hacer ningun echo
	{
		$this->sNom = 'Zaparras S.L.';
		$this->iNumEmp = 78;
		$this->sDireccion = 'C/ Falsa, 123';
	}

	/********** GET **********/
	//get es para devolver un variable

	/**
	 * Método que devuelve nombre de la empresa
	 */
	//function getNom es para hacer publico
	function getNom() {
		return $this->sNom;
	}

	/**
	 * Método que devuelve el número de empleados
	 *  de la empresa
	 */
	function getNumEmpleados() {
		return $this->iNumEmp;
	}

	/**
	 * Método que devuelve la dirección de la empresa
	 */
	function getDireccion() {
		return $this->sDireccion;
	}

	/*********** SET ***********/
	//set es para cambiar el variable

	/**
	 * Método que cambia el número de empleados
	 * @param Int $iniEmpl Número de empleados
	 */
	function setNumEmpleados($iniEmpl) {
		$this->iNumEmp = $iniEmpl;
		return 0;//no va a de
	}

}

$miFabrica = new Fabrica();
echo $miFabrica->getNom() . "\n";

echo $miFabrica->getNumEmpleados() . "\n";

$miFabrica->setNumEmpleados(50);

echo $miFabrica->getNumEmpleados() . "\n";

?>