<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---operacion e interfaz mostrar productos Home: administrador----->
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
    
    <script type="text/javascript">
function confirmarDelete(){
    var res = confirm("¿Seguro que quieres eliminar el producto?");
    if(res==true){
        return true;
    }
    else{
        return false;
    }
}  
        
    </script>
    
    
    <main>    
<div id="panel">
    <?php
    require RUTA_APP.'/vistas/vc/heatA.html';
//include("../html/heatA.html");
?>
<div id="botones">
            <a href="<?php echo RUTA_URL?>admin/AgregarP">+Productos</a> <a href=<?php echo RUTA_URL?>admin/mcuenta>Cuenta</a> <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
            
    </div>

     <div id="vmenu"  class="vertical-menu">
                  <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a>
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div> 
    <div id="interno">
        <h3><?php echo $datos['Titulo'];?></h3>
          <table>
        <tr>
            <td><h4>Foto</h4></td>
            <td><h4>Id</h4></td>
            <td><h4>Nombre</h4></td>
            <td><h4>Cantidad</h4></td>
            <td><h4>Categoria</h4></td>
            <td><h4>Operaciones</h4></td>    
        </tr>
              
    <?php
           

              foreach ($datos['Productos'] as $a) : 
    ?>          
              <tr>
                    <td><img height="50px" width="50px"
                       src="data:image/jpg;base64,<?php echo base64_encode($a->foto); ?>"/></td>
                    <td><?php echo $a->idproducto; ?></td>
                    <td><?php echo $a->nombrepro; ?></td>
                    <td><?php echo $a->cantexistencia; ?></td>
                    <td><?php echo $a->categoria; ?></td>
                    <td><a id="opemod" href="<?php echo RUTA_URL?>admin/modificar/<?php echo $a->idproducto?> ?>">Modificar</a></td>
                    <td><a id="opemod" onclick="return confirmarDelete()" href="<?php echo RUTA_URL?>admin/ConfirmPE/<?php echo $a->idproducto?>">Eliminar</a></td>
              </tr>
              
              
    <?php
              endforeach;
    ?>          
          </table>
    </div>
             
              
<?php
require RUTA_APP.'/vistas/vc/aside.html'; 
require RUTA_APP.'/vistas/vc/minifoot.html'; 
      
?>