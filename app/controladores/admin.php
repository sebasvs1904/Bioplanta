<?php 
/**
 * 
 */
class admin extends controlador
{
	
	public function index()
	{
		 session_start();
		 $actividad = $this->modelo('Productos');

                     $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$actividad->Mostrarproductos()];
                
			$this->vista('paginas/PanelAdmin',$datos);
		}
		public function registro()
		{
			session_start();
			$this->vista('paginas/Radmin');
			# code...
		}
		//manda a la vista de agregar producto
		public function AgregarP()

		{
					 session_start();

			$this->vista('paginas/Rproducto');
			# code...
		}
		//Agrega producto

		public function ConfirmP()
		{
			session_start();
			 $actividad = $this->modelo('Productos');
			 $a=$actividad->Agregarproducto();
 $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$actividad->Mostrarproductos()];
                
			$this->vista('paginas/PanelAdmin',$datos);
			# code...
		}
		//elimina el producto
		public function ConfirmPE($id='')
		{
			session_start();
			$actividad = $this->modelo('Productos');
			 $a=$actividad->Eliminarproducto($id);
 $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$actividad->Mostrarproductos()];
                
			$this->vista('paginas/PanelAdmin',$datos);
			 //$this->vista('paginas/PanelAdmin');
			# code...
		}
		public function ConfirmAE($id='')
		{
session_start();
			$actividad = $this->modelo('iniciarsecion');
			 $a=$actividad->EliminarAPerfil($id);
 $datos= [
                        'Titulo'=>"Administradores",
                          'Admin'=>$actividad->MostrarA()];
                
			$this->vista('paginas/MostrarA',$datos);
			 //$this->vista('paginas/PanelAdmin');
			# code...
		}

		//manda a llamar a el proucto a modificar y la vista de modificar
		public function modificar($id='')
		{
			session_start();
			$actividad = $this->modelo('Productos');
	$datos=['Titulo'=>'Bioplant',
			'Dato'=> $actividad->MostrarProducto($id)];
			$this->vista('paginas/Mproducto',$datos);
			# code...
		}
		//Realiza la modificacion
		public function ConfirmMP($id='')
		{
			session_start();
			$actividad = $this->modelo('Productos');
			 $a=$actividad->Modificarproducto($id);
 $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$actividad->Mostrarproductos()];
                
			$this->vista('paginas/PanelAdmin',$datos);
			 //$this->vista('paginas/PanelAdmin');
			# code...
			# code...
		}
		//Muestra Todos los admin
		public function MostrarAdmin()
		{
			session_start();
			$actividad = $this->modelo('iniciarsecion');
			 $datos= [
                          'Admin'=>$actividad->MostrarA(),
                          'Dir'=>$actividad->MostrarD()
                      ];
                
			$this->vista('paginas/MostrarA',$datos);
			# code...
		}
		//muestra todos los clientes
		public function MostrarC()
		{
			session_start();
			$actividad = $this->modelo('iniciarsecion');
			 $datos= [
                          'Cliente'=>$actividad->MostrarC(),
                          'Dir'=>$actividad->MostrarD()
                      ];
                
			$this->vista('paginas/MostrarC',$datos);
			# code...
		}
		 public function mcuenta() {
            session_start();
            $actividad = $this->modelo('iniciarsecion');
	$datos=['Titulo'=>'Bioplant-Admin',
			'Dato'=> $actividad->perfilAdmin()];
	    $this->vista('paginas/Cuentadmin',$datos);
	}
	    public function MostrarVenta()
	    {
	    	session_start();
			$actividad = $this->modelo('iniciarsecion');
			 $datos= [
                          'compra'=>$actividad->MostrarCompra(),
                      ];
                
			$this->vista('paginas/MostrarVent',$datos);

	    	# code...
	    }
	    public function mostrarV($codigo='')
	    {
	    				$actividad = $this->modelo('iniciarsecion');

	    			 session_start();
	    			  $datos= [
                          'compra'=>$actividad->mostrarV($codigo),
                          'Folio'=>$codigo
                      ];

	    	$this->vista('paginas/inspeccionar',$datos);
	    	# code...
	    }
	    public function Fecha()
	    {
	    	$actividad = $this->modelo('iniciarsecion');

	    			 session_start();
	    			  $datos= [
                          'compra'=>$actividad->Buscarventa(),
                         
                      ];

	    	$this->vista('paginas/MostrarVent',$datos);
	    	# code...
	    }


}