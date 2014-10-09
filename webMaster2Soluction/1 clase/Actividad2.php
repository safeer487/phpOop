<?php 
/**
 * Objeto de camiseta
 */
class Camiseta
{
	//Variables dinámicas
	public $iCodigo = '';
	public $iTalla = '';
	public $sColor = '';
	public $sDibujo = '';
	public $iGenero = 0;
	public $fPrecio = '';
	public $bDisponible = false;
	

	/**
	 * Constructor
	 */
	public function __construct(){

	}
	/********SETS**********/
	/**
	 * Set talla
	 * @param Int $iniTalla Entre 1 y 80
	 */
	public function setTalla($iniTalla){
		if($iniTalla > 0 && $iniTalla <= 80){
			$this->iTalla = $iniTalla;
		}
	}

	/**
	 * Set disponible
	 * @param String $insDis Si o No
	 */
	public function setDisponible($insDis){
		switch ($insDis) {
			case 'Si':
				$this->bDisponible = true;
				break;
			
			case 'No':
				$this->bDisponible = false;
				break;
		}
	}

	/**
	 * Método que muestra todos los datos formateado
	 */
	public function mostrarDatos(){
		echo 'Codigo: '. $this->iCodigo . "\n";
		echo 'Talla: '. $this->iTalla . "\n";
		echo 'Color: '.$this->sColor. "\n";
		echo 'Diujo: '.$this->sDibujo. "\n";
		//Muestra genero
		echo 'Genero';
		switch ($this->iGenero) {
			case false:
				echo 'Mujer';
				break;
			
			case true:
				echo 'Hombre';
				break;
		}
		echo 'Precio: '.$this->fPrecio ."\n";
		switch ($this->bDisponible) {
			case false:
				echo "No Disponible";
				break;
			
			case true:
				echo "Disponible";
				break;
		}
	}
}
//Creo objeto camiseta
$miCamisetaMicky = new Camiseta();
/** Modifico sus variables **/
$miCamisetaMicky->iCodigo = 12345;
$miCamisetaMicky->setTalla(23);
$miCamisetaMicky->sColor = "gris";
$miCamisetaMicky->sDibujo = "Saltando";
$miCamisetaMicky->iGenero = 1;
$miCamisetaMicky->fPrecio = 5;
$miCamisetaMicky->setDisponible('Si');

$miCamisetaMicky->mostrarDatos();








 ?>