<?php


class Principio {
    public function decirHola() {
        echo '¡Hola ';
    }
}

trait DecirFraseEntera {
    public function decirHola() {
        parent::decirHola();
        echo 'Mundo!';
    }
}

class Saludo extends Principio {
    use DecirFraseEntera;
}

$miSaludo = new Saludo();
$miSaludo->decirHola();


?>