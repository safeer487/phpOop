<?php 

/* Declaración simple */

/**
* Clase de ejemplo
*/
class Homer
{
	
	/* Variables */
	public $iNumHijos = 3;
	public $sMujer = 'Marge';
	//constante podemos llamar cuando quieromos sin utilizar el new
	const LUGAR_NACIMIENTO = 'Sprinfield';

	public function getLugarNacimiento() {
		//para recoger el constante es
		return self::LUGAR_NACIMIENTO;
	}

}

//Forma 1
echo 'Ha nacido en ' . Homer::LUGAR_NACIMIENTO . "\n";

$miHomer = new Homer();
echo 'Y tiene ' . $miHomer->iNumHijos . " hijos.\n";

//Forma 2
echo 'Ha nacido en ' . $miHomer::LUGAR_NACIMIENTO . "\n";

//Forma 3
echo 'Ha nacido en ' . $miHomer->getLugarNacimiento() . "\n";

?>