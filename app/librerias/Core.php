<?php
/* 
Mapear la url ingresada en el controlador 
1.- controlador
2.- metodo
3.- parametro
ejempño /articulo/actualizar/4
*/
/**
 * 
 */
class Core 
{
	protected $controladorActual='paginas';
	protected $metodoActual='index';
	protected $parametro=[];
	function __construct()
	{
		//print_r($this->geturl());
		$url=$this->geturl();
		//busca en controladores si el controlador existe
		if (file_exists('../app/controladores/'.ucwords($url[0]).'.php'))
		 {
			$this->controladorActual=ucwords($url[0]);
			unset($url[0]); 
			# code...
		}
		//requerir el controlador
		require_once '../app/controladores/'.$this->controladorActual.'.php';
		$this->controladorActual=new $this->controladorActual;
		// verificar la segunda parte del url
		if(isset($url[1])){
			if(method_exists($this->controladorActual, $url[1]))
		{
			$this->metodoActual=$url[1];
			unset($url[1]);
		}
		}
		//echo $this->metodoActual;
		//obtener los parametros
		$this->parametros=$url ? array_values($url): [];
		call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

	}
	public function geturl(){
		if (isset($_GET['url']))
		 {
			$url=rtrim($_GET['url'],'/');
			$url=filter_var($url, FILTER_SANITIZE_URL);
			$url=explode('/', $url);
			return $url;
			# code...
		}
	}

}