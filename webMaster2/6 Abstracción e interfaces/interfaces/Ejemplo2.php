<?php  

/** Clase interfaz **/

interface Remolque
{
    public function enganchar();
    public function soltar();
}

interface DVD
{
    public function reproducir();
    public function parar();
}

class Coche implements Remolque, DVD
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

	public function reproducir() {
		echo 'Reproduciendo película';
	}

	public function parar() {
		echo 'DVD parado';
	}
}

$miCoche = new Coche();
echo $miCoche->enganchar();
echo $miCoche->reproducir();

?>