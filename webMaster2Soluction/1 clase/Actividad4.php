<?php 

/**
* Sistema de entrada de empleados
*/
class EntradaEmpleados 
{
	public $aEmpleados = array('safeer','lorena','lucas','andros');
	public $bExiste = false;
	public $sNomActual = '';
	public $iTiem = 0;
	/**
	 * construct
	 * @param string $insEmpleados empleado
	 */
	public function __construct($insNombreEmp1)
	{
		$this->sNomActual = $insNombreEmp1;//primero tenemos que tener constructor
		$this->iTiem = time();
		$this->validar();
	}

	public function verTiempoTrab(){
		echo "\nTiempo Trabajado: ".(time() - $this->iTiem);
	}
	/**
	 * Metodo para validar el nombre
	 */
	public function validar(){
		foreach ($this->aEmpleados as $key => $value) {
			if ($value == $this->sNomActual) {
				$this->bExiste = true;
			}
		}
			if($this->bExiste){
				echo 'Bienvenido '. $this->sNomActual;
			}else{
				echo 'Usted no es un empleado.';
			}
		}
	}

$miEmpleado = new EntradaEmpleados('safeer');
$miEmpleado->verTiempoTrab();





 ?>