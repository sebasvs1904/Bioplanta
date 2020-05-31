<?php 
class iniciarsecion {
        private $db;
        private $nombre;
        private $contrasena;
        public function __construct () 
        {
       $this->db = new Base;
        }

public function index()
{                  
	            $this->db = new Base;
                //Hacer conexion con el constructor de Base
}
public function MostrarC()
{$query="SELECT * FROM cliente";
$this->db->query($query);
$clientes=$this->db->registros();
return $clientes;
    # code...
}
public function MostrarD()
{$query="SELECT * FROM direccion";
$this->db->query($query);
$clientes=$this->db->registros();
return $clientes;
    # code...
}
public function MostrarCompra()
{$query="SELECT idcliente, folio, fecha_compra FROM compra GROUP BY folio";
$this->db->query($query);
$clientes=$this->db->registros();
return $clientes;
    # code...
}
public function mostrarV($folio='')
{

       $query="SELECT  c.idproducto, p.nombrepro, p.preciou, p.categoria, (p.preciou*c.cantidad) as total_pago, c.fecha_compra, c.cantidad FROM compra as c INNER JOIN productos p ON c.idproducto= p.idproducto WHERE folio = '$folio'; ";
        $this->db->query($query);
        $ventas=$this->db->registros();
return $ventas;
  # code...
}

public function MostrarA()
{
    $query="SELECT * FROM administrador";
$this->db->query($query);
$clientes=$this->db->registros();
return $clientes;
    # code...
}


        public function buscarUsuario(){
            try {
                $this->db->query("SELECT COUNT(*) as conta FROM cliente WHERE nombreusuario = '$this->nombre' and clavecli='$this->contrasena'" );
                $contrasenHash = $this->db->registro();
                 return  $contrasenHash->conta;
               
               //$contrasenHash;

            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //verificar si  el usuario ya esta registrado y validar contraseña
        public function validarDatos(){
             session_start();
            $this->nombre = $_POST['username'];
            $this->contrasena = $_POST['password'];
        $_SESSION['usuario']=$this->nombre;

            $existe = $this->buscarUsuario();
            //echo $existe;
            echo empty($existe);
            if( empty($existe)){
                return [1,"El usuario no esta registrado"];
                if($existe==1)
                    return [0,'Bienvenido'];
            }
        }
          public function buscarUsuarioa(){
            try {
                $this->db->query("SELECT COUNT(*) as conta FROM administrador WHERE nombreusuarioa = '$this->nombre' and claveadmin='$this->contrasena'" );
                $contrasenHash = $this->db->registro();
                //echo $contrasenHash;
                return  $contrasenHash->conta;
              //  return $contrasenHash;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //verificar si  el usuario ya esta registrado y validar contraseña
        public function validarDatosA(){
            session_start();
            $this->nombre = $_POST['username'];
            $this->contrasena = $_POST['password'];
            $_SESSION['usuario']=$this->nombre;
            $existe = $this->buscarUsuarioa();
           // echo $existe;
              if($existe==1)
                    return [0,'Bienvenido'];
            if(empty($existe)){
                return [1,"El usuario no esta registrado"];
                
            }
        }
        public function ClientePerfil() {
             $var=$_SESSION['usuario'];
        //echo $_SESSION['usuario'];
        $this->db->query("SELECT * FROM `cliente` where nombreusuario = '$var' ");
        return $this->db->registro();
}
public function EliminarCPerfil()
{$var=$_SESSION['usuario'];
 $this->db->query("SELECT idcliente as id, iddireccion as i FROM `cliente` where nombreusuario = '$var' ");
    $hola=$this->db->registro();
     $this->db->query("DELETE FROM `tarjeta` where idcliente = '$hola->id'");
     $this->db->execute();
     $this->db->query("DELETE FROM  `cliente` where nombreusuario = '$var' ");
     $this->db->execute();
      $this->db->query("DELETE FROM `direccion` where idcliente = '$hola->i'");
     $this->db->execute();
    # code...
}
public function EliminarAPerfil($id='')
{


$this->db->query("SELECT  iddireccion as i FROM `administrador` where idadmin = $id");
    $hola=$this->db->registro();
    $this->db->query("DELETE FROM  `administrador` where idadmin= $id");
     $this->db->execute();
      $this->db->query("DELETE FROM `administrador` where idadmin = '$hola->i'");
     $this->db->execute();
    # code...
}

public function perfilAdmin($value='')
{
     $var=$_SESSION['usuario'];
           // echo $var;
        $this->db->query("SELECT * FROM `administrador` where nombreusuarioa = '$var' ");
        return $this->db->registro();
}
public function Buscarventa()
{
   $FechaIni=$_POST['fecha_inicio']; 
              $FechaFin=$_POST['fecha_final'];
              $query="SELECT idcliente, folio, fecha_compra FROM compra WHERE  fecha_compra>='$FechaIni' AND fecha_compra<='$FechaFin' GROUP BY folio";
              $this->db->query($query);
        $ventas=$this->db->registros();
return $ventas;
  # code...
}



}
    