<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---operacion e interfaz mostrar administradores----->
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
    var res = confirm("¿Seguro que quieres eliminar al administrador?");
    if(res==true){
        return true;//aqui se pondra el confirmar contraseña
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

// include("../html/heatA.html");?>
<div id="botones">
                 <a href="<?php echo RUTA_URL?>admin/registro">Registrar Admin</a> <a href=<?php echo RUTA_URL?>admin/index>Home <a href=<?php echo RUTA_URL?>Cerrar>Logout</a> 
            
    </div>

     <div id="vmenu"  class="vertical-menu">
                   <a href="<?php echo RUTA_URL?>admin/MostrarAdmin">Administradores</a>
                  <a href="<?php echo RUTA_URL?>admin/MostrarC">Usuarios</a>
                   <a href="<?php echo RUTA_URL?>admin/MostrarVenta">Ventas</a> 
                  <a href="<?php echo RUTA_URL?>/admin/index">Productos</a>
                </div> 
    <div id="interno">
        <h3>Administradores</h3>
          <table>
        <tr>
            <td><h5>Perfil</h5></td>
            <td><h6>Nombre</h6></td>
            <td><h6>A. Paterno</h6></td>
            <td><h6>A. Materno</h6></td>
            <td><h6>Nom. Usuario</h6></td>
            <td><h6>Correo</h6></td>
            <td><h6>Fecha de ingreso</h6></td>
            <td><h6>Operacion</h6></td>    
        </tr>
              
    <?php
   // include("../modelo/Conectar.php");
              
     //         $query="SELECT * FROM Administrador";
       //      $resultado=mysqli_query($conexion,$query);
         //     while($row=$resultado->fetch_assoc())
              //{
    foreach ($datos['Admin'] as $a) : 
    ?>          
              <tr>
                    <td><img height="50px" width="50px"
                       src="<?php echo RUTA_URL?>img/perAdmin.jpg"/></td>
                    <td><h6><?php echo $a->nombreadmin; ?></h6></td>
                    <td><h6><?php echo $a->apellidoap; ?></h6></td>
                    <td><h6><?php echo $a->apellidoam; ?></h6></td>
                    <td><h6><?php echo $a->nombreusuarioa; ?></h6></td>                   
                    <td><h6><?php echo $a->email ?></h6></td>
                    <td><h6><?php echo $a->fec_ingreso; ?></h6></td>
                  
<td><a id="opemod" onclick="return confirmarDelete()" href="<?php echo RUTA_URL?>admin/ConfirmAE/<?php echo $a->idadmin?> ">Eliminar</a></td>
              </tr>    
    <?php endforeach ?>          
          </table>
    </div>
  
<?php
require RUTA_APP.'/vistas/vc/aside.html';
         
?>