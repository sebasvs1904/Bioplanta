<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>

<title>BIOPLANT</title>
  
    <head>
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/PanelC.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/descripcion.css" rel="stylesheet" type="text/css"/>
    
     
</head>
<body><main>
    
       <div id="panelbus"> 
<?php require RUTA_APP.'/vistas/vc/heatA.html';
?>
           <br><br>
     
     <div id="vmenu"  class="vertical-menu">
                   <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a>                  
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div>

    <div id="botones">
             <a href="<?php echo RUTA_URL?>admin/index">Home</a> <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
   
     </div>
 
     <?php
 //   include("../modelo/Conectar.php");
   //          $idpro=$_REQUEST['idproducto'];  
     //         $query="SELECT * FROM Productos WHERE idproducto='$idpro'";
       ///       $resultado=mysqli_query($conexion,$query);
          //    $row=$resultado->fetch_assoc();
    ?>
    <div id="panelbase">
                <div id="paneldescriptivo">   
<aside id="columna1"> 
      <blockquote>
           <h1><br><?php echo $datos['Titulo']; ?></h1><br><br>         
          <h3>Nombre:</h3>  <?php echo  $datos['Dato']->nombreadmin."  ". $datos['Dato']->apellidoap."  ". $datos['Dato']->apellidoam."  "; ?> <br><br>
          <h3>Fecha de nacimiento:</h3><?php echo  $datos['Dato']->fecha_nac;?><br><br>
            <h3>NombreUsuario:</h3> <?php echo  $datos['Dato']->nombreusuarioa;?><br><br><br>
          <p><h3>Telefono:</h3> <?php echo  $datos['Dato']->telefono;?>
           <p><h3>E-mail:</h3> <?php echo  $datos['Dato']->email;?>
        </blockquote></aside>
           <aside id="columna2">  
              <blockquote>       
                 <img id="imgdescri" height="250px" width="250px"
                  src="<?php echo RUTA_URL?>img/perAdmin.jpg?>">
                  <br>

                 </script>
        </blockquote>
  
         </aside>       
               
             </div>       
     </div>
           
<?php
require RUTA_APP.'/vistas/vc/aside.html';
     
require RUTA_APP.'/vistas/vc/minifoot.html'; 

