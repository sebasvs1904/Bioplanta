<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---operacion e interfaz mostrar ventas   nuevo----->
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

    
    <main>    
        <div id="panelven">
        <?php 
            require RUTA_APP.'/vistas/vc/heatA.html';
//include("../html/heatA.html");?>
        <div id="botones">
        <a href="https://mail.google.com/mail/u/0/">Ir a Gmail</a><a href=<?php echo RUTA_URL?>admin/mcuenta>Cuenta</a> 
            <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
        </div>
            
            
         <br>
          <form id="formularioven" action="<?php echo RUTA_URL?>/admin/fecha" method="POST">
              <h4>Especifique el rango de fechas:</h4>
              De: <input type="date" name="fecha_inicio" placeholder="fecha_compra" required>
              A:  <input type="date" name="fecha_final" placeholder="fecha_compra" required>      
            <input type="submit" value="Buscar" href = "mosfecha.php" >
          </form>
            
            
            <br><br><br><br>
            
            

     <div id="vmenu"  class="vertical-menu">
         
                     <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a>
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div> 

    <div id="internoven">
        <h3>Ventas</h3>
          <table>
        <tr>
        <td><h4>Perfil</h4></td>
        <td><h4>id Cliente</h4></td>
        <td><h4>Folio</h4></td>
        <td><h4>Fecha compra</h4></td>
        <td><h4>Operacion</h4></td>    
        </tr>
              
    <?php
    
              
              //$query="SELECT idcliente, folio, fecha_compra FROM compra GROUP BY folio";
             //$resultado=mysqli_query($conexion,$query);
              foreach ($datos['compra'] as $a) : 
              
    ?>          
              <tr>
                    <td><img height="100px" width="100px"
                       src="../img/perAdmin.jpg"/></td>   
                    <td><h4><?php echo $a->idcliente; ?></h4></td>
                    <td><h4><?php echo $a->folio; ?></h4></td>
                  	<td><h4><?php echo $a->fecha_compra; ?></h4></td>                              
                    <td><a id="opemod"  href="<?php echo RUTA_URL?>/admin/mostrarV/<?php echo $a->folio;?>">Inspeccionar</a></td><td>
                  
              </tr>    
    <?php endforeach;?>          
          </table>
    </div>
  
<?php
require RUTA_APP.'/vistas/vc/aside.html'; 
require RUTA_APP.'/vistas/vc/minifoot.html';         
?>
