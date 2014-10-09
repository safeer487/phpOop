<?php 

/**
* Clase que gestiona un restaurante
*/
class Restaurante
{
	//Variables
	private $sDireccion = '';
	private $sNom = '';
	private $iSoc = 0;
	private $iEmpl = 0;
	private $iCli = 0;
	private $bAbi = false;


	function __construct()
	{
		$this->sDireccion = 'Calle falsa';
		$this->sNom = 'Grota';
	}

	/***** GETS ******/

	public function getDireccion() {
		return $this->sDireccion;
	}

	public function getNombre() {
		return $this->sNom;
	}

	public function getAbierto() {
		return $this->bAbi;
	}

	/***** SETS *******/

	public function setSocios($iniSoc) {
		$this->iSoc = $iniSoc;
	}

	public function setEmpleados($iniNum) {
		$this->iEmpl = $iniNum;
	}

	public function setClientes($iniNueClient) {
		$this->iCli = $iniNueClient;
	}

	/** Metodos **/
	public function abrirRestaurante() {
		$this->bAbi = true;
	}

	public function cerrarRestaurante() {
		$this->bAbi = false;
	}

	public function imprimirFicha() {
		echo "Dirección: $this->sDireccion\n";
		echo "Nombre: $this->sNom\n";
		echo "Nº Socios: $this->iSoc\n";
		echo "Nº Empleados: $this->iEmpl\n";
		echo "Nº Clientes: $this->iCli\n";
		echo "Estado: ";
		if($this->bAbi) {
			echo "Abierto\n";
		} else {
			echo "Cerrado\n";
		}
	}
}

$miRestaurante = new Restaurante();
$miRestaurante->setSocios(5);
$miRestaurante->setClientes(50);
$miRestaurante->setEmpleados(8);
$miRestaurante->abrirRestaurante();
$miRestaurante->imprimirFicha();

?>