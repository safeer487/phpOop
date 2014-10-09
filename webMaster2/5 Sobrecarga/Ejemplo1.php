<?php

class Tren {

	private $aPasaj;

	public function __constructor() {
		$this->aPasaj = array();
	}

	public function __set($insNom, $insVagon) {
		echo "Estableciendo '$insNom' a '$insVagon'\n";
        $this->aPasaj[$insNom] = $insVagon;
    }

    public function __get($insNom) {
    	echo "Consultando vagon donde esta alojado '$insNom':\n";
        if (array_key_exists($insNom, $this->aPasaj)) {
            echo $this->aPasaj[$insNom];
        } else {
            echo 'Ninguno';
        }
        echo "\n";
    }

    /**  Desde PHP 5.1.0  */
    public function __isset($insPasajero) {
        if(isset($this->aPasaj[$insPasajero])) {
            echo "Existe\n";
        } else {
            echo "No existe\n";
        }
    }

    /**  Desde PHP 5.1.0  */
    public function __unset($insNom) {
        echo "Eliminando '$insNom'\n";
        unset($this->aPasaj[$insNom]);
    }
}

$miTren = new Tren();
$miTren->__set('Apu', 'Restaurante');
$miTren->__set('Nelson', '5');
$miTren->__get('Apu');
$miTren->__isset('Apu');
$miTren->__unset('Apu');
$miTren->__isset('Apu');

?>