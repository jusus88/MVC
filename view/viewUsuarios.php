<?php 

class viewUsuarios 
{
	function page($t="",$s="",$src=""){

	include "template.php";
	sup($t,$s);

	include $src;

	inferior(); 
	
	}
}


 ?>