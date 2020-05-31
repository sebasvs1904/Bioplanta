<?php
//Realiza la validacion de si esta iniciada una sesion y si no lo manda a la pagina de inicio 
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---seccion del menu: Flores----->
<title>BIOPLANT</title>
  
    
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/PanelC.css" rel="stylesheet" type="text/css"/>
    
     
</head>
<body><main>
    
       <div id="panelbus"> 
<?php
require RUTA_APP.'/vistas/vc/heatCBus.html'; 
//include("../html/heatCBus.html");?>
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
 
     
    <div id="interno">
        <h3><?php echo $datos['Titulo'];?></h3>
      <?php      

   
               
      //        $query="SELECT * FROM Productos";
    //          $resultado=mysqli_query($conexion,$query);
          
                // while($row=$datos->fetch_assoc())
  foreach ($datos['Dato'] as $a) : 
    # code...
 // echo "hola estelita";
        
    ?>             <div id="prod">
                 <center><br><?php echo $a->nombrepro; ?><br><br>
                        <img height="150px" width="150px"
                       src="data:image/jpg;base64,<?php echo base64_encode($a->foto); ?>"/><br>
                       
                Precio: $ <?php echo $a->preciou; ?> <br/><br><a id="verpro" href="<?php echo RUTA_URL?>Cliente/Mostrar/<?php echo $a->idproducto; ?>">Detalles</a>
                      </center>  
                  </div>
              
    <?php 
             
             endforeach;
              
    ?>    
              
    <?php ?> 
              
              
        
</div>
<?php

require RUTA_APP.'/vistas/vc/aside.html';
require RUTA_APP.'/vistas/vc/minifoot.html'; 

?>