<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---operacion e interfaz inspeccinar Ventas    nuevo----->
<head><meta charset="utf-8"/>
<meta name="keywords" content="HTML5, CSS3, JavaScript">
<!-- <meta http‐equiv="refresh" content="20; URL=index.php" >-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>BIOPLANT</title>
  
    <link href="<?php echo RUTA_URL?>css/venta.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
 
   
</head>  
<body>
    <script type="text/javascript">
function eVen(){
    var res = confirm("¿Seguro que quieres eliminar el registro de la venta?");
    if(res==true){
        return true;
    }
    else{
        return false;
    }
    
} </script>   
    
    <main>    
        <div id="panelven">
        <?php            require RUTA_APP.'/vistas/vc/heatA.html';

        // include("../html/heatA.html");?>
        <div id="botones">
             <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Regresar</a><a href=<?php echo RUTA_URL?>admin/mcuenta>Cuenta</a> 
            <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
        </div>

            
         <br>
                            
            
            <br><br><br><br>
            
            

     <div id="vmenu"  class="vertical-menu">
         
                   <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a>
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div> 

    <div id="internoven">

        <h3>Venta</h3>
               <table>
        <tr>
        <td><h6>Perfil</h6></td>
       
        <td><h6>id Producto</h6></td>
        <td><h6>Producto</h6></td>
        <td><h6>Categoria</h6></td>    
        <td><h6>Precio</h6></td>
        <td><h6>Cantidad</h6></td>
        <td><h6>Pago Total</h6></td>
        <td><h6>Fecha compra</h6></td>
            
        </tr>
              
    <?php
   // include("../modelo/Conectar.php");
     //         $folio=$_REQUEST['folio'];  
       
             //$resultado=mysqli_query($conexion,$query);
              //while($row=$resultado->fetch_assoc())
              //{ 
    foreach ($datos['compra'] as $a) : 
    ?>          
              <tr>
                    <td><img height="50px" width="50px"
                       src="<?php echo RUTA_URL?>/img/perAdmin.jpg"/></td>
                    <td><h6><?php echo $a->idproducto; ?></h6></td>
                    <td><h6><?php echo $a->nombrepro; ?></h6></td>
                  	<td><h6><?php echo $a->categoria; ?></h6></td>
                    <td><h6>$ <?php echo $a->preciou; ?></h6></td>
                    <td><h6><?php echo $a->cantidad; ?></h6></td>
                    <td><h6>$ <?php echo $a->total_pago; ?></h6></td>
                    <td><h6><?php echo $a->fecha_compra; ?></h6></td>
                    <?php $fecha=$a->fecha_compra; ?>
              </tr>
                   
                   <?php 
                   endforeach//} ?>   <tr><td><h2>Folio: <?php echo $datos['Folio'];?><h2></td></tr>          
          </table>
              
    </div>            
        <br><br> 
        <a id="opemod" onclick="return eVen()" href="ElimVent.php?folio=<?php echo $folio;?>&&fecha_compra=<?php echo $fecha?>">Eliminar</a> 
  
<?php
require RUTA_APP.'/vistas/vc/aside.html';
         require RUTA_APP.'/vistas/vc/minifoot.html';
?>
