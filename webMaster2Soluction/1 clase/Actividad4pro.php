<?php 

/**
* Sistema de entrada de empleados
*/
class EntradaEmpleados 
{
	public $aEmpleados = array(
			array('Safeer','php','1234'),
			array('Lorena','fresita','qwerty')


		);
	public $bExiste = false;
	public $sNomActual = '';
	public $iTiem = 0;
	/**
	 * construct
	 * @param string $insEmpleados empleado
	 */
	public function __construct($insAlias,$insPass)
	{
		//$this->sNomActual = $insNombreEmp1;//primero tenemos que tener constructor
		$this->iTiem = time();//Los segundos desde 1970 hasta hora
		$this->validar($insAlias,$insPass);
	}

	public function verTiempoTrab(){
		echo "\nTiempo Trabajado: ".(time() - $this->iTiem);//Aqui mostramos el tiempo actual - el tiempo 
	}
	/**
	 * Metodo para validar el nombre
	 */
	public function validar($insAlias,$insPass){
		foreach ($this->aEmpleados as $key => $value) {
			if ($value[1] == $insAlias && $value[2] == $insPass) {
				$this->bExiste = true;
				$this->sNomActual = $value[0];
			}
		}
			if($this->bExiste){
				echo 'Bienvenido '. $this->sNomActual;
			}else{
				echo 'Usted no es un empleado.';
			}
		}
	}

$miEmpleado = new EntradaEmpleados('php','1234');
$miEmpleado->verTiempoTrab();





 ?>