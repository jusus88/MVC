<?php 

 class controllerUsuario
 {
 	function __construct()
 	{
 		include "view/viewUsuarios.php";
 		$this ->obj=new viewUsuarios();

 	}
 	private function index()
 	{
 		$this->obj->page("Agenda 2019: Inicio","Inicio","view/html/nuevo.html");
 	}
 	private function nosotros()
 	{
 		$this->obj->page("Agenda 2019: Nosotros","Nosotros","view/html/vista.html");
 	}
 	private function salir()
 	{
 		$this->obj->page("Cierre se seccion: Salir","Salir");
 	}



 	public function ruteador()
 	{
 		extract($_GET);

		if (isset($nosotros))
		{

			$this->nosotros();
		}else if(isset($salir))
		{

			$this->salir();
		}else{
			$this->index();
		}
 	}
 }


 ?>