<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---operacion e interfaz mostrar clientes----->
    <head><meta charset="utf-8"/>
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<!-- <meta http‐equiv="refresh" content="20; URL=index.php" >-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>BIOPLANT</title>
  
    <link href="<?php echo RUTA_URL?>css/PanelA.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
 
   
</head>
<body>
    
    <main>    
<div id="panel">

<?php
 require RUTA_APP.'/vistas/vc/heatA.html';
// include("../html/heatA.html");?>
<div id="botones">
            <a href="https://mail.google.com/mail/u/0/">Ir a Gmail</a><a href=<?php echo RUTA_URL?>admin/mcuenta>Cuenta</a> 
            <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
            
    </div>

     <div id="vmenu"  class="vertical-menu">
                   <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a>
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div> 
    <div id="interno">
         <h3>Usuarios</h3>
          <table id="Mostrar">
        <tr>
            <td><h5>Perfil</h5></td>
            <td><h6>Nombre</h6></td>
            <td><h6>A. Paterno</h6></td>
            <td><h6>A. Materno</h6></td>
            <td><h6>Nom. Usuario</h6></td>
            <td><h6>Correo</h6></td>
            <td><h6>Telefono</h6></td>
            <td><h6>Direccion</h6></td>    
        </tr>
              
    <?php
   // include("../modelo/Conectar.php");
              
     //
      //        $query="SELECT * FROM Cliente";
    //        $resultado=mysqli_query($conexion,$query);
        //      while($row=$resultado->fetch_assoc())
              //{
     foreach ($datos['Cliente'] as $a) : 

    ?>          
              <tr>
                    <td><img height="50px" width="50px"
                       src="../img/perClient.jpg"/></td>
                    <td><h6><?php echo $a->nombrecli; ?></h6></td>
                    <td><h6><?php echo $a->apellidop; ?></h6></td>
                    <td><h6><?php echo $a->apellidom; ?></h6></td>
                    <td><h6><?php echo $a->nombreusuario; ?></h6></td>       
                    <td><h6><?php echo $a->email; ?></h6></td>
                    <td><h6><?php echo $a->telefono; ?></h6></td>
                    <td><h6><?php      
                                   $id=$a->iddireccion;
                                   
                                   foreach ($datos['Dir'] as $b) {
                                    $idd=$b->iddireccion;
                                     if($id==$idd){
                                     print $b->calle.", ". $b->cp.", ". $b->municipio.", ". $b->estado.", ". $b->num_casa;
                                   }  
                                   }
                                          
                                   //$query2="SELECT * FROM Direccion WHERE iddireccion=$id";
                                   //$resultado2=mysqli_query($conexion,$query2); $row1=$resultado2->fetch_assoc();
                       
                                   
                                    ?>
                            
                        </h6></td> 
                    
              </tr> 
              
              
    <?php
         endforeach;                            
    ?>          
          </table>
    </div>
  
<?php
require RUTA_APP.'/vistas/vc/aside.html';
require RUTA_APP.'/vistas/vc/minifoot.html';

//include("../html/aside.html");           
//include("../html/minifoot.html");           
?>