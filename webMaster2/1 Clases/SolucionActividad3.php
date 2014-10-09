<?php 

/**
* Clase que realiza operaciones aritméticas
*/
class Calculadora
{
	//Variables
	public $iNum1 = 0;
	public $sOp = '';
	public $iNum2 = 0;
	public $fResul = 0;

	/**
	 * Constructor
	 * @param int $iniNum1
	 * @param String $insOp
	 * @param int $iniNum2
	 */
	function __construct($iniNum1, $insOp, $iniNum2)
	{
		$this->iNum1 = $iniNum1;
		$this->sOp = $insOp;
		$this->iNum2 = $iniNum2;
		$this->operar();
		$this->imprimir();
	}

	/**
	 * Método que hace la operación
	 */
	public function operar() {
		switch ($this->sOp) {
			case '+':
				$this->fResul = $this->iNum1 + $this->iNum2;
				break;
			case '-':
				$this->fResul = $this->iNum1 - $this->iNum2;
				break;
			case 'x':
				$this->fResul = $this->iNum1 * $this->iNum2;
				break;
			case '/':
				$this->fResul = $this->iNum1 / $this->iNum2;
				break;
		}
	}

	/**
	 * Método que imprime la operación entera
	 */
	public function imprimir() {
		echo "$this->iNum1 $this->sOp $this->iNum2 = $this->fResul\n";
	}
}

new Calculadora(98 , 'x', 5);
new Calculadora(98 , '-', 5);

?>