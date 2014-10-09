<?php

class Homer
{
    public $iIndiceInteli = 30;
    public $iPelCabeza = 3;

    public function getPelosCabeza()
    {
        echo 'Pelos en la cabeza: ' . $this->iPelCabeza . PHP_EOL;
    }

    public function setPelosCabeza($iniPel) {
        $this->iPelCabeza = $iniPel;
    }
    
}

class Bart extends Homer
{
    public $sAficiones = 'Monopatín';
}




$miBart = new Bart();
$miBart->setPelosCabeza(5000);
$miBart->getPelosCabeza();
echo $miBart->iIndiceInteli;

?>