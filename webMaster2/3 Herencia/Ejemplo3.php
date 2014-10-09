<?php
class Abraham {
	private $sNom = 'Abraham';
	protected $sApellido = 'Simpson';
	public $sColorPiel = 'Amarilla';

	public function getNombreCompleto() {
		echo $this->sNom . ' ' . $this->sApellido . PHP_EOL;
	}
}
 
class Homer extends Abraham {
    private $sNom = 'Homer';
}
 
class Bart extends Homer {
    private $sNom = 'Bart';

    public function getNombreCompleto() {
		echo $this->sNom . ' ' . $this->sApellido . PHP_EOL;
	}
}
 
 
$miAbuelo = new Abraham();
$miPadre = new Homer(); 
$miHijo = new Bart();

//$miPadre->getNombreCompleto(); //Se utiliza una función del padre
$miHijo->getNombreCompleto(); //Para que sea propia, hay que sobreescribir a la del abuelo
 
?>