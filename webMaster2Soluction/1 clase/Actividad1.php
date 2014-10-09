<?php 

class Boxeador
{
	public $sNom = '';
	public $sNomArtistico = '';
	public $iPeso = '';
	public $sNacionalidad = '';

/*
	//funcion de imprimir
	public function __construct($insNom,$insAritistico,$insPeso,$insNacionalidad){
		$this->sNom = $insNom;
		$this ->sNomArtistico = $insAritistico;
		$this ->iPeso = $insPeso;
		$this ->sNacionalidad = $insNacionalidad;
	}
*/
	//segunda forma
	public function __construct(){

	}

	public function mostrarDatos() {
		echo 'Nombre: ' . $this->sNom . "\n";
		echo 'Nombre Artistico: ' . $this->sNomArtistico . "\n";
		echo 'Peso: ' . $this->iPeso . "\n";
		echo 'Nacionalidad: ' . $this->sNacionalidad . "\n";
	}

}
/*
$miBoxeador1 = new Boxeador('Ali','king','80','Senegal');
$miBoxeador1 -> mostrarDatos();
$miBoxeador2 = new Boxeador('Aamir','khan','69','Ingles');
$miBoxeador2 -> mostrarDatos();
*/
//segunda forma
$miBoxeadorAli = new Boxeador();
$miBoxeadorAli->sNom = 'Ali';
$miBoxeadorAli->sNomArtistico = 'king';
$miBoxeadorAli->iPeso = '80';
$miBoxeadorAli->sNacionalidad = 'senegal';

$miBoxeadorAli->mostrarDatos();
 ?>