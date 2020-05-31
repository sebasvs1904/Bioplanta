<!---operacion registrar admins----->
<?php
/**
 * 
 */
class  op_registroAdir  extends Controlador
{
    public function index()
    {
        include("Modelo/Conectar.php");
    $nom=$_POST['Nombre'];
    $pater=$_POST['Apaterno'];
    $mater=$_POST['Amaterno'];
    $usu=$_POST['nomUsuario'];
    $fnac=$_POST['fecNac'];
    $cont=$_POST['PassWord'];
    $email=$_POST['email'];
    $telef=$_POST['Telefono'];

$fecingre=$_POST['feIngre'];

    $cp=$_POST['CP'];
    $est=$_POST['Estado'];
    $ciu=$_POST['Ciudad'];
    $muni=$_POST['Municipio'];
    $calle=$_POST['Calle'];
    $ncasa=$_POST['Numcasa'];
$query0="INSERT INTO Direccion (calle, cp, municipio, estado, num_casa) VALUES ('.$calle.','.$cp.','.$muni.','.$est.','.$ncasa.')";
$resultado0=$conexion->query($query0);
$s=mysqli_insert_id($conexion);
echo "el ide es".$s;

$query1="INSERT INTO administrador ( `nombreadmin`, `apellidoap`, `apellidoam`, `nombreusuarioa`, `fecha_nac`, `telefono`, `email`, `claveadmin`, `fec_ingreso`, `iddireccion`) VALUES  ('$nom','$pater','$mater','$usu', '$fnac','$telef','$email','$cont','$fecingre','$s')";
$resultado1=$conexion->query($query1);
if($resultado1){
    session_start();
    $actividad = $this->modelo('iniciarsecion');
 $datos= [
                        'Titulo'=>"Administradores",
                          'Admin'=>$actividad->MostrarA()];
                
            $this->vista('paginas/MostrarA',$datos);
        $this->vista('Paginas/PanelAdmin');
    }else{
    echo '<script> alert("Hubo algun problema al registrar.");                   
                           </script>';
}
        # code...
    }
   
}

    //mysqli_close($conexion);
?>

