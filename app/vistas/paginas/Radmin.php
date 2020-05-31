<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");

}
?>
<!---interfaz registrar admin----->
<!DOCTYPE html>
<html>
<head>

<title>Registro Admin</title>       
    <link href="<?php echo RUTA_URL?>css/main.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo RUTA_URL?>js/validaciones.js"></script>
</head>         
<body bgcolor=#45B39D><main>
<center>
     <img   src="../img/LogoBioPlant.jpg" height="150px" width="250px"/>
        <h1>REGISTRO DE ADMINISTRADOR</h1>
        <br><br>
     <form id="regis" action="<?php echo RUTA_URL?>op_registroAdir" method="POST">
        <h4>DATOS GENERALES:</h4><br>
        Nombre:<br/><input type="text" REQUIRED name="Nombre" placeholder="Informacion del admin..." value=""/><br><br>
        Apellido paterno:<br/><input type="text" REQUIRED name="Apaterno" placeholder="Informacion del admin..." value=""/><br><br> 
        Apellido materno:<br/><input type="text" REQUIRED name="Amaterno" placeholder="Informacion del admin..." value=""/><br><br>  
        Usuario:<br/><input type="text" REQUIRED name="nomUsuario" placeholder="Informacion del admin..." value=""/><br><br> 
        Fecha de Nacimiento:<br/><input type="date" REQUIRED name="fecNac"  value=""/><br><br> 
        Contraseña:<br/><input type="password" REQUIRED name="PassWord" placeholder="Informacion del admin..." value=""/><br><br>
        E-mail:<br/><input type="text" REQUIRED name="email" placeholder="Informacion del admin..." value=""/><br><br>
        Telefono:<br/><input type="text" REQUIRED name="Telefono" placeholder="Informacion del admin..." value=""/><br><br>
         
         <br><br><h4>DIRECCION:</h4><br>
         CP:<br/><input type="text" REQUIRED name="CP" placeholder="Informacion del admin..." value=""/><br><br>
         Estado:<br/><input type="text" REQUIRED name="Estado" placeholder="Informacion del admin..." value=""/><br><br>
         Ciudad:<br/><input type="text" REQUIRED name="Ciudad" placeholder="Informacion del admin..." value=""/><br><br>
         Municipio:<br/><input type="text" REQUIRED name="Municipio" placeholder="Informacion del admin..." value=""/><br><br>
         Calle:<br/><input type="text" REQUIRED name="Calle" placeholder="Informacion del admin..." value=""/><br><br>
         N° de Casa:<br/><input type="text" REQUIRED name="Numcasa" placeholder="Informacion del admin..." value=""/><br><br>
         
         <br><br>
        <h4>Fecha Ingreso:</h4><br/><input type="date" REQUIRED name="feIngre" value=""/><br><br> 
        
        
    
    
    <input type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
         <input  type="submit" value="Guardar"/>
         
    
        
     </form><br><br>
        </center>      
    </main></body> 
</html>

