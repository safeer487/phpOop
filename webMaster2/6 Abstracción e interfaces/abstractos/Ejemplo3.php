<?php  

/** Clase abstracta **/

abstract class Remolque
{
	//Fuerza la extensión de clase para definir estos métodos
    abstract public function enganchar();
    abstract public function soltar();

    private $iPeso = 500;

    public function getPeso() {
    	echo $this->iPeso;
    }
}

class Coche extends Remolque
{
	public function arrancar() {
		echo 'El coche a arrancado';
	}

	public function enganchar() {
		echo 'Remolque enganchado';
	}

	public function soltar() {
		echo 'Soltar remolque';
	}
}

$miCoche = new Coche();
echo $miCoche->getPeso();

?>