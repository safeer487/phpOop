<?php
trait HolaMundo {
    public function decirHola() {
        echo '¡Hola Mundo!';
    }
}

class Saludador {
	//No sobreescibe al método propio
    use HolaMundo;
    public function decirHola() {
        echo '¡Hola Universo!';
    }
}

class Saludador2 extends Saludador {
	use HolaMundo;
}

//Imprimirá: ¡Hola Universo!
$miSaludador = new Saludador();
$miSaludador->decirHola();

//Imprimirá: ¡Hola Mundo!
$miSaludador2 = new Saludador2();
$miSaludador2->decirHola();

?>