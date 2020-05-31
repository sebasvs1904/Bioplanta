<?php
/**
 * 
 */
class iniciar extends Controlador
{
	private $tipo;
	
	function __construct()
	{
		
	
		//echo "index";
	
		# code...
	}
public function index(){
	$this->vista('paginas/login');
		//echo "index";
		//$this->vista('paginas/inicio');
	}
  public function regis()
  {
    $this->vista('paginas/registrar');

    # code...
  }
	public function validarRegistro (){
   
           $this->tipo=$_POST['Opcion'];
           if($this->tipo=='Cliente'){
    
           		$iniciarSesion = $this->modelo('iniciarsecion');
           		$verificar = $iniciarSesion->validarDatos() ;

            	if ($verificar[0]==0) {
                  $mostrar=$this->modelo('Productos');
                     $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$mostrar->Mostrarproductos()];
                 $this->vista('paginas/Catalogo',$datos);
            	}else{
                        $this->vista('paginas/login');
            	}
           }
           else{
            if($this->tipo=='Administrador'){

                $iniciarSesion = $this->modelo('iniciarsecion');
              $verificar = $iniciarSesion->validarDatosA() ;

              if ($verificar[0]==0) {
                $mostrar=$this->modelo('Productos');
                     $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$mostrar->Mostrarproductos()];
                  //header('Location: '.RUTA_URL.'/Paginas_Controller');
                 $this->vista('paginas/PanelAdmin',$datos);
              }
              else{
                        $this->vista('paginas/login');
              }

            }
            else{
               $this->vista('paginas/login');
            }

           }
            //se incluye y crea una instancia del modelo RegistrarUsuario
            

            
        }
}
?>