<?php 
/**
 * 
 */
class cliente extends controlador
{
	
	public function index()
	{
		 session_start();

			$actividad = $this->modelo('Productos');

                     $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$actividad->Mostrarproductos()];
                
			$this->vista('paginas/Catalogo',$datos);

		# code...
	}
	public function Mostrar($id='')
	{
		session_start();
	$actividad = $this->modelo('Productos');
	$datos=['Titulo'=>'Bioplant',
			'Dato'=> $actividad->MostrarProducto($id)];
	    $this->vista('paginas/Dproducto',$datos);



		# code...
	}

	public function MostrarCat($categoria='')
	{
		session_start();

		$actividad = $this->modelo('Productos');
	$datos=['Titulo'=>$categoria,
			'Dato'=> $actividad->MostrarCa($categoria)];
	    $this->vista('paginas/'.$categoria,$datos);
		# code...
	}
	public function mostrarU()
	{
		 session_start();
		$actividad = $this->modelo('iniciarsecion');
	$datos=['Titulo'=>'Bioplant-User',
			'Dato'=> $actividad->ClientePerfil()];
	    $this->vista('paginas/Cuenta',$datos);
		# code...
	}
	public function EliminarU()
	{
		 session_start();
		$actividad = $this->modelo('iniciarsecion');
			$a= $actividad->EliminarCPerfil();
			session_destroy();
	    $this->vista('paginas/inicio');
		# code...
	}

	public function agregar($id='')
	{
		session_start();

$actividad = $this->modelo('Productos');
	$datos= $actividad->MostrarProducto($id);
	//SSSecho $canpro=$_POST['canti'];;
		$b=$this->modelo('carro');
		$ac=$b->Agregar($id,$datos);

		 		$this->vista('paginas/vcarrito');

		# code...
	}
	public function MostrarCarrito($value='')
	{
		session_start();

		$this->vista('paginas/vcarrito');
		# code...
	}
	public function Cancelar($value='')
	{
		session_start();
		$b=$this->modelo('carro');
		$ac=$b->cancelar();
		$this->vista('paginas/vcarrito');
		# code...
	}
	public function quitar($id)
	{
		session_start();
		$b=$this->modelo('carro');
		$ac=$b->quitar($id);
		$this->vista('paginas/vcarrito');
		
		# code...
	}
	public function confirmar($total)
	{
			 session_start();
	$this->vista('paginas/confirmarcompra',$total);
		# code...
	}
	public function ticket($total)
	{
		 
$b=$this->modelo('carro');

  session_start();
		$ac=$b->ticket($total);		 
		 

	$this->vista('paginas/ticket',$total);

		# code...
	}
	public function buscar()
	{
		session_start();

		$actividad = $this->modelo('Productos');
	$datos=['Titulo'=>$categoria,
			'Dato'=> $actividad->buscap($op)];
	    $this->vista('paginas/busca-producto',$datos);
		# code...
	}
}