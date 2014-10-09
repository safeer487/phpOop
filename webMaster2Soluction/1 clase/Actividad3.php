<?php 

/**
 * objeto calculadora
 */
class calculadora
{
	//variable dinamicas
	public $fNum1 = 0;
	public $iOpe = '';
	public $fNum2 = '';
	public $fResul = 0;

	/**
	 * Constructor
	 * @param float $infNum1 numero1
	 * @param string $insOpe  operador a calcular
	 * @param float $infNum2 numero2
	 */
	public function __construct($infNum1, $insOpe, $infNum2)
	{
		$this->fNum1 = $infNum1;
		$this->sOpe = $insOpe;
		$this->fNum2 = $infNum2;
		$this->calcular();
	}
	/**
	 * Método que realiza el calculo aritmético
	 */
	public function calcular(){
		switch ($this->sOpe) {
			case '+':
				$this->fResul = $this->fNum1 + $this->fNum2;
				break;
			case '-':
				$this->fResul = $this->fNum1 - $this->fNum2;
				break;
			case '*':
				$this->fResul = $this->fNum1 * $this->fNum2;
				break;
			case '/':
				$this->fResul = $this->fNum1 / $this->fNum2;
				break;
			
			
		}
	}
	/**
	 * Método que muestra el resultado solo
	 * @return [type] [description]
	 */
	public function verResultadoSimple(){
		echo $this->fResul;
	}

	/**
	 * Método que muestra toda la operación
	 */
	public function verResultadoCompleto(){
		echo $this->fNum1. ' '.$this->sOpe . ' '.$this->fNum2 . ' = ' . $this->fResul; 
	}	
}

$miCalculadora = new calculadora(56, '-', 32);
$miCalculadora->verResultadoCompleto();







 ?>