<?php  

/**
 * Los modelos llevan la lógica del sistema. Reciben instrucciones
 * y devuelven resultados. Y nada más.
 */
class Seguridad{

	public function __construct(){
		session_start();
		if (!$_SESSION['usuario']) {
			header('Location:controlador.php?vista=identificarse');
			exit;
		}
	}


}



class ModeloIdentificar {
	//variables
	private $sDni;
	private $bMostrarError = false;
	private $aMensError = array();
	private $aMens = array();

	public function __construct(){
		if ($_POST) {
			//Rellenamos mensajes
			$this->aMens['noValido'] = 'Su DNI no tiene un formato correcto';
			$this->aMens['vacio'] = 'Debe rellenar el campo con su DNI.';
			$this->aMens['siVotado'] = 'Usted ya ha votado.';
			$this->sDni = $_POST['dni'];
			$this->verificarDNI();
			$this->comprobar();
		}	
		
	}
	
	public function comprobar(){
		require_once 'BD.class.php';
		$miBD = new DB;
		$sSQL = "SELECT * FROM VOTO WHERE dni='".$this->sDni. "'";
		
		$iNumResul = $miBD->contarResultadosQuery($sSQL);
		if ($iNumResul >= 1) {
			$this->redirigeAVotar($sSQL, $miBD);
		}else{
			$this->bMostrarError = true;
		}
			
	}	
	private function redirigeAVotar($insSQL, $inBD){
			$aResul = $inBD->obtenerResultado($insSQL);
			session_start();
			$_SESSION['usuario'] = $aResul[0]['dni'];
			//Redireccionamos a la pagina de aminstracion
			header('Location: controlador.php?vista=votar');
			exit;
	}
	/**
	 * Function que muestra error
	 * @return error
	 */
	public function isError(){
		return $this->bMostrarError;
	}
	public function getMensajeError(){
		$sHTML = '<ul>';
		foreach ($this->aMensError as $key => $value) {
			$sHTML .= '<li>'.$value.'</li>';
		}
		$sHTML .= '</ul>';
		return $sHTML;
	}
	private function verificarDNI(){
		//Comprobamos que tiene 9
		if (strlen($this->sDni) != 9) {
			$this->aMensError[] = $this->aMens['noValido'];
			$this->bMostrarError = true;
		}
		if (strlen($this->sDni) == 0) {
			$this->aMensError[] = $this->aMens['vacio'];
			$this->bMostrarError = true;
		}
	}
}

class ModeloVotar {
	//Variable 
	private $iVoto = 0;
	private $sDni = '';
	/**
	 * Constructor principal
	 */
	public function __construct(){
		new Seguridad();
		if ($_POST) {
			$this->sDni = $_SESSION['dni'];
			$this->iVoto = $_POST['votacion'];
			$this->insertarVoto();
		}
	}

	private function insertarVoto(){
		require_once 'BD.class.php';
		$miDB = new DB();
		$sSQL = "INSERT INTO voto VALUES('$this->sDni','$this->iVoto');";
		$miDB->ejecutarQuery($sSQL);
		header('Location: controlador.php?vista=identificarse');
		exit;
	}
	/**
	 * Método que genera el HTML para votar en un radio
	 * @return String 
	 */
	public function generarHTMLOpciones(){
		$sHTML = '';
		require_once 'BD.class.php';
		$miDB = new DB();
		$sSQL = "SELECT id,nombre FROM partidos;";
		$aResul = $miDB->obtenerResultado($sSQL);
		foreach ($aResul as $key => $value) {
			$sHTML .= '<div class="radio">
			<input type="radio" name="votacion" value="'.$value['id'].'" checked>'. $value['nombre'].'
			</div>';
		}
		return $sHTML;
	}
	private function IntroduzirVoto(){


	}

}



?>