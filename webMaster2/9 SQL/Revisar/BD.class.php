<?php
/**
 * Clase para utilizar la base de datos
 */
class DB {
	//Variables
	public static $DB_HOST = 'localhost';
	public static $DB_USER = 'root';
	public static $DB_PASS = '';
	public static $DB_TYPE = 'mysql';
	public static $DB_NOM = '';
	private $sQuery;
	private $aRows = array();
	private $conn;

	/**
	 * Constructor
	 */
	public function __construct() {
	}
	/**
	 * Método que conecta con la base de datos
	 */
	private function abrirConexion() {
		$this->conn = new PDO(self::$DB_TYPE . ':host=' . self::$DB_HOST 
			. ';dbname=' . self::$DB_NOM, self::$DB_USER, self::$DB_PASS);
	}
	/**
	 * Método que desconecta de la base de datos
	 */
	private function cerrarConexion() {
		$this->conn = null;
	}
	/**
	 * Método que ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	 * @param  String $insSQL Sentencia SQL
	 */
	public function ejecutarQuery($insSQL) {
		$this->sQuery = $insSQL;
		$this->abrirConexion();
		$this->conn->query($this->sQuery);
		$this->cerrarConexion();
	}
	/**
	 * Método que traer resultados de una consulta en un Array
	 * @param  String $insSQL Sentencia SQL
	 */
	public function getResultadosQuery($insSQL) {
		$this->sQuery = $insSQL;
		$this->abrirConexion();
		$result = $this->conn->query($this->sQuery);
		while ($this->aRows[] = $result->fetch());
		$result->closeCursor();
		$this->cerrarConexion();
		return $this->aRows;
	}
}
$miDB = new DB();
print_r($miDB->getResultadosQuery('SELECT * FROM'));

?>