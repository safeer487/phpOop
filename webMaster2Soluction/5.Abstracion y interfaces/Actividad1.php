<?php 
abstract class Animal{
	 public $sColorPiel;
	 public $iNumPatas;
}

interface mamifero {
	public function getTiempoGestacion();
}
interface reptil {
	public function colorDelPiel();
}
interface pez {
	public function esDeAguaDulce();
}
interface ave {
	public function alturaDelVuelo();
}
/**
* 
*/
class Elefante implements mamifero//implements es para interfaces
{
	public function getTiempoGestacion(){
		echo '50 meses';
	}
}
/**
* 				
*/
class Iguana implements reptil
{
	public function colorDelPiel(){
		echo 'Color de piel es verde.';
	}
}
/**
* 
*/
class Dolfin implements pez
{
	public function esDeAguaDulce(){
		echo 'Si es de agua dulce';
	}
}
/**
* 			
*/
class pajaro implements ave
{
	public function alturaDelVuelo(){
		echo '500 metros';
	}
}

$miElefante = new Elefante();
$miElefante->getTiempoGestacion();
echo "\n";

$miIguana = new Iguana();
$miIguana->colorDelPiel();
echo "\n";
 
$miDolfin = new Dolfin();
$miDolfin->esDeAguaDulce();
echo "\n";

$miPajaro = new pajaro();
$miPajaro->alturaDelVuelo();
echo "\n";
/**
* 		
*/
class Gato extends Animal implements mamifero
{
	public $sColorPiel = 'negro';
	public $iNumPatas = 3;
	public function getTiempoGestacion(){
		echo '9 semanas';
	}
}

$miGatoNegro = new Gato();
echo $miGatoNegro->sColorPiel;


 ?>