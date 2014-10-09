<?php
class BaseClass {
   public function __construct() {

   }
   
   final public function moreTesting() {
       echo "Esto es una clase final\n";
   }
}

$miBase = new BaseClass();
$miBase::moreTesting();

?>