<?php
//Realiza la validacion de si esta iniciada una sesion y si no lo manda a la pagina de inicio 
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---Ver productos: Descripcion----->
<title>BIOPLANT</title>
  
    <head>
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/PanelC.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/descripcion.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo RUTA_URL?>js/validaciones.js"></script>

    
     
</head>
<body><main>
    
       <div id="panelbus"> 
<?php require RUTA_APP.'/vistas/vc/heatCBus.html';
?>
           <br><br>
     
     <div id="vmenu"  class="vertical-menu">
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Ofertas">Ofertas.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Flores">Flores.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Cactus">Cactus.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Orquideas">Orquideas</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Sombra">De sombra.</a>
                  <a href="<?php echo RUTA_URL?>cliente/MostrarCat/Jardin">Jardineria.</a>
                </div>

    <div id="botones">
 <a href="<?php echo RUTA_URL?>cliente/mostrarU">Cuenta</a>
     <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
   
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
           <h1><br><?php echo $datos['Dato']->nombrepro; ?></h1><br><br>         
          <h3>Precio:</h3> $ <?php echo  $datos['Dato']->preciou; ?> <br><br>
          <h3>Disponibles:</h3><?php echo  $datos['Dato']->cantexistencia;?><br><br>
            <h3>Categoria:</h3> <?php echo  $datos['Dato']->categoria;?><br><br><br>
          <p><h3>Descripcion:</h3> <?php echo  $datos['Dato']->descripcion;?></blockquote></aside>
           <aside id="columna2">  
              <blockquote>       
                 <img id="imgdescri" height="250px" width="250px"
                  src="data:image/jpg;base64,<?php echo base64_encode($datos['Dato']->foto); ?>"><br>
                   <form method="POST" action="<?php echo RUTA_URL?>Cliente/agregar/<?php echo $datos['Dato']->idproducto; ?>" enctype="multipart/form-data">
                    Cantidad: <input type="text"  REQUIRED name="canti"  placeholder="0"  /><br><br>
                     <div id="botonesdesc"><input  type="submit" value="Agregar al Carrito"/></div>
                  </form>
                  <br>
                 
        </blockquote>
  
         </aside>       
               
             </div>       
     </div>
           
<?php

require RUTA_APP.'/vistas/vc/aside.html';
require RUTA_APP.'/vistas/vc/minifoot.html';

     
?>     