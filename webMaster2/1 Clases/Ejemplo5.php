<?php 

/**
* Multiconstructs
*/
class nomClass {
	
	function __construct() { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 

	function __construct0() {
		echo "Arguments 0 \n";
	}

	function __construct1($insNom) {
		echo "Arguments 1 $insNom \n";
	}

	
}

new nomClass();
new nomClass('Mozart');

?>