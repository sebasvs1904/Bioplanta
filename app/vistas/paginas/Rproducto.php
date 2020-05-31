<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---interfaz registrar producto----->
<!DOCTYPE html>
<html>
<head>
<title>Registro Producto</title>       
    <link href="<?php echo RUTA_URL?>css/main.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/PanelC.css" rel="stylesheet" type="text/css"/>
</head>         
<body bgcolor=#45B39D><main>
    <center>
    <img   src="<?php echo RUTA_URL?>img/LogoBioPlant.jpg" height="150px" width="250px"/>
        <h1>REGISTRO DE PRODUCTO</h1>
        <br><br>
     <form id="regis" action="<?php echo RUTA_URL;?>/admin/ConfirmP" method="POST" enctype="multipart/form-data">
        Foto:<br/><input type="file" REQUIRED name="Foto"/><br><br>
        Nombre:<br/><input type="text" REQUIRED name="Nombre" placeholder="Rosal rojo..." value=""/><br><br>
        Cantidad:<br/><input type="text" REQUIRED name="Cantidad" placeholder="60,90,20,100...etc" value=""/><br><br>
        Categoria: <br/><input type="text" REQUIRED list="cate" name="Categoria" placeholder="Elije una opcion..."/><br><br>

                    <datalist id="cate">
                        <option value="Ofertas">
                        <option value="Flores">
                        <option value="Cactus">
                        <option value="Orquideas">
                        <option value="Sombra">
                        <option value="Jardineria">    
                    </datalist>

         Precio unitario:<br/><input type="text" REQUIRED name="PrecioU" placeholder="$..." value=""/><br><br>
         Descripcion:<br/><br><textarea id="desc" REQUIRED name="Descripcion" placeholder="Informacion del producto..." value=""/></textarea><br><br>
         <input type="button" onclick="history.back()" name="Cancelar" value="Cancelar">
         <input  type="submit" value="Guardar"/>
         
    
        
     </form><br><br>
        </center>      
    </main></body> 
</html>

