<?php
/**
 * se encarga de poder cargar los modelos y las vistas
 */
class Controlador
{
	function __construct()
	{
		# code...
	}
	public function modelo($modelo)
		{
			require_once '../app/modelos/'.$modelo.'.php';
		return new $modelo();
			# code...
		}	
	public function vista($vista,$datos='')
			{
				if(file_exists('../app/vistas/'.$vista.'.php')){
		require_once '../app/vistas/'.$vista.'.php';
	}
	else{
		//si el archivo de la vista no existe
		die("La vista no existe");
	}
				# code...
			}
		//el archivo existe 
		

}
?>