<?php

class paginas extends controlador
{

	
	public function __construct()
	{ //$this->usuarioModelo=$this->modelo('iniciar');
	//$this->Consultas=$this->modelo('Consultas');
		//echo "controlador pagina cargar";
	}
	
	public function index(){
		//echo "index";
		$this->vista('paginas/inicio');
	}
}