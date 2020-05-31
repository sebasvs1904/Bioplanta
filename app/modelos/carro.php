<?php
/**
 * 
 */
class carro {
	

	function __construct()
	{
		$this->db = new Base;
		# code...
	}
	public function index()
	{
		$this->db = new Base;
		# code...
	}
	public function Agregar($id='',$datos='')
	{
		if(isset($_SESSION['agregar_carro']))
    {   
        $productos_array_id_carrito = array_column($_SESSION['agregar_carro'],'idproducto');
        if(!in_array($id,$productos_array_id_carrito)) 
        {
            $count= count($_SESSION['agregar_carro']);
            $productos_array = array(
                'idproduct'    => $id,
                'nombrepro'    => $datos->nombrepro,
                'preciopro'    => $datos->preciou,
                'cantidadpro'  => $_POST['canti']
              
            ); 
            
            $canpro=$_POST['canti'];
            $idpro=$id;
            
            if($canpro<=$datos->cantexistencia){
                 $_SESSION['agregar_carro'][$count]=$productos_array;
            $query="UPDATE productos SET cantexistencia=(cantexistencia-'$canpro') WHERE idproducto='$idpro'";    
                $this->db->query($query); 
                $this->db->execute();
             }else{
                 echo '<script> alert("No puedes agregar mas productos de los que estan disponibles.");
                                history.back(); </script>';
            } 
        }else{
             echo '<script> alert("Producto repetido.");
                    window.location="vcarrito.php"; </script>';
        } 
        
    }else{
            $productos_array = array(
               'idproduct'    => $id,
                'nombrepro'    => $datos->nombrepro,
                'preciopro'    => $datos->preciou,
                'cantidadpro'  => $_POST['canti']
                
            );
            $_SESSION['agregar_carro'][0] = $productos_array;
        
             }
}

		

		# code...
	
	public function Quitar($id='')
	{
		 foreach ($_SESSION['agregar_carro'] AS $key => $value)
        {
            if($value['idproduct'] == $id)
            {   
                    
                $idp=$value['idproduct'];
                $cpro=$value['cantidadpro'];
                
                $query="UPDATE productos SET cantexistencia=(cantexistencia+'$cpro') WHERE idproducto='$idp'";
               $this->db->query($query); 
                $this->db->execute();

                
                unset($_SESSION['agregar_carro'][$key]);
                echo '<script> alert("El Producto fue eliminado!");
                               </script>';
            }

        }
	}
	public function cancelar()
	{
		foreach ($_SESSION['agregar_carro'] AS $key => $value)
        {
       ;
        	
                $idp=$value['idproduct'];
                $cpro=$value['cantidadpro'];
                if($cpro!=null || $crpo!=""){
					$query="UPDATE productos SET cantexistencia=(cantexistencia+'$cpro') WHERE idproducto='$idp'";
                $this->db->query($query); 
                $this->db->execute();
                }
                

                
                unset($_SESSION['agregar_carro'][$key]);
                echo '<script> alert("Los Producto fueron eliminados!");
                              </script>';
           
            }

		# code...
	}
	public function ticket($total)
	{
		
		$usu=$_POST['usuario'];
$cla=$_POST['clave'];    
$mtotal=$total;
$cvv=$_POST['cvv'];    
$folio=rand(0,100000000);
$fecha=date("d") . " del " . date("m") . " de " . date("Y");

$query2="SELECT *  FROM cliente c INNER JOIN tarjeta t ON t.idcliente=c.idcliente WHERE c.nombreusuario='$usu' AND c.clavecli='$cla' AND t.cvv='$cvv'";
	$this->db->query($query2);
    $valido=$this->db->registro($query2);

    //$valido=mysqli_num_rows($resultado2);
    //$dato=$resultado2->fetch_assoc();
    $idcli=$valido->idcliente;

      if($idcli<=0){ 
            echo '<script> alert("Datos incorrectos, usuario inexistente");</scritp>';
                              
          
       
      }else{
      foreach ($_SESSION['agregar_carro'] AS $key => $value)
           {
                
                      $idpro=$value['idproduct'];
                      $cantida=$value['cantidadpro'];
                      $query3="INSERT INTO compra (idproducto, idcliente, folio, cantidad) VALUES ('$idpro','$idcli','$folio','$cantida');";
                  $this->db->query($query3); 
                $this->db->execute();
                 }
       
        
		# code...
	}

}
}