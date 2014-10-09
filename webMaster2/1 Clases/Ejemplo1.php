<?php

/* Estructura de objeto */


//class es un packete
class nombreDeClase {
    // Declaración de las propiedades
    public $iVar = 5;

    // Declaración del métodos
    public function getVariable() {
    	//quiro coger este variable
        echo $this->iVar;
    }
}

$miNombreClase = new nombreDeClase();
$miNombreClase -> getVariable();
?>