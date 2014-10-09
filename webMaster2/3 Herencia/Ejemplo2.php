<?php

class Homer
{
    public $iIndiceInteli = 30; //Si se heredará. Es público, por lo que es accesible para todos
    protected $iPelCabeza = 3; //Si se heredará. Se comporta como un private, tanto en el padre como el hijo
    private $sEsposa = 'Marge'; //No se heredará. Solo es accesible dentro del padre.

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


$miHomer = new Homer();
$miHomer->iIndiceInteli;
//$miHomer->iPelCabeza; //No son accesibles
//$miHomer->sEsposa; //No son accesibles

$miBart = new Bart();
$miBart->iIndiceInteli;
//$miBart->iPelCabeza; //Los protected solo son accesibles internamente, como un private. Si quieres utilizarlo tendrás que declarar en el padre un get
$miBart->getPelosCabeza();
$miBart->sEsposa; //Los private no se heredan. Las esposas no pasan de padres a hijos

?>