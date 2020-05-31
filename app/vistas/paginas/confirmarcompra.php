<?php
//Realiza la validacion de si esta iniciada una sesion y si no lo manda a la pagina de inicio 
//session_start();
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  //SSecho "<script>alert('USted no tiene autorizacion');</script>";
  //header("location:  ".RUTA_URL."paginas/inicio.php");
    echo "ALGO ANDA MAL";
}
?>
<!---Interfaz confirmar contraseña nuevo----->
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Confirmar contraseña</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
    <link rel="stylesheet" href="<?php echo RUTA_URL?>css/main.css" type="text/css">
    <link href="<?php echo RUTA_URL?>css/PanelA.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css" />

</head>
<?php

        
    ?>

<body bgcolor=#45B39D>
    <?php require RUTA_APP.'/vistas/vc/heatA.html';?>
    <br><br><br>
    <!--nuevo-->
    <script type="text/javascript">

    </script>


    <form style="background-color:#7AE886" action="<?php echo RUTA_URL?>Cliente/ticket/ <?php echo $datos;?>" method="POST">
        <h2>Confirmar compra</h2>
        Usuario:<input type="text" placeholder="Dan456..." name="usuario">
        <br><br>
        Contraseña:<br><input type="password" placeholder="******" name="clave">
        <br><br>
        CVV:<br><input type="text" placeholder="12**" name="cvv">
        <br><br>
        <input type="submit" value="Confirmar"><br><br>
        <br>
        <h3>Total a pagar: $<?php echo $datos;?></h3>
    </form>
</body>

<?php require RUTA_APP.'/vistas/vc/minifoot.html';?>
