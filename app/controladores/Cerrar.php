<?php
/**
 * 
 */
class Cerrar extends Controlador
{
	
	function index()
	{
		session_start();
		session_destroy();
		$this->vista('paginas/inicio');
		# code...
	}
}