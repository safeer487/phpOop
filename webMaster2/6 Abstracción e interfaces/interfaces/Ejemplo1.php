<?php  

/** Clase interfaz **/

interface Remolque
{
	//Fuerza la extensión de clase para definir estos métodos
    public function enganchar();
    public function soltar();
}

class Coche implements Remolque
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
echo $miCoche->enganchar();

?>