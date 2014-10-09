<?php

class Homer
{
    static public function getPelosCabeza()
    {
        echo 'Pelos en la cabeza: 5' . PHP_EOL;
    }
}

class Bart extends Homer
{
    static private function imprimirPelosCabeza()
    {
        echo 'Pelos en la cabeza: 100' . PHP_EOL;
    }

    static public function getPelosCabeza() {
        self::imprimirPelosCabeza();//self es para mi mismo solo usa para los funciones estaticos
                                    //se resplaza $this por self
    }

    static public function verPelosPapa() {
        parent::getPelosCabeza();//parent es para padre
    }
}

Bart::getPelosCabeza();
Bart::verPelosPapa();

?>