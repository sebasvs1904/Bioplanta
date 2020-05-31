<?php
$var=$_SESSION['usuario'];
if($var==null || $var=''){
  echo "<script>alert('USted no tiene autorizacion');</script>";
  header("location:  ".RUTA_URL."paginas/inicio.php");
}
?>
<!---Interfaz modificar producto y mandar a llamar datos----->
<!DOCTYPE html>
<html>
<head>
<title>Modificar Producto</title>       
   <link href="<?php echo RUTA_URL?>css/PanelA.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo RUTA_URL?>js/validaciones.js"></script>
    
</head>         
<body bgcolor=#45B39D><main>
<center>
     <img   src="<?php echo RUTA_URL?>/img/LogoBioPlant.jpg" height="150px" width="250px"/>
    
    <script type="text/javascript">
function confCancel(){
    var res = confirm("¿Seguro que quieres cancelar la operacion? Los datos que modificaste se borraran.");
    if(res==true){
        return history.back();
    }
    else{
        return false;
    }
    
}    
        
      
    </script>
    
    
       <?php
    //include("../modelo/Conectar.php");
            //$idpro=$_REQUEST['idproducto'];  
              //$query="SELECT * FROM Productos WHERE idproducto='$idpro'";
              //$resultado=mysqli_query($conexion,$query);
              //$row=$resultado->fetch_assoc();
              
    ?>  
    <h1>MODIFICAR PRODUCTO</h1>
        <br><br>
     <form id="regis" action="<?php echo RUTA_URL?>admin/ConfirmMP/<?php echo $datos['Dato']->idproducto; ?>" method="POST" enctype="multipart/form-data">
                
      Foto:<br/><input type="file"  REQUIRED name="Foto"/>
         <img  id="foto" height="150px" width="150px"
             src="data:image/jpg;base64,<?php echo base64_encode($datos['Dato']->foto); ?>"/> 
         <br><br>
        
        Nombre:<br/><input id="nombre"type="text" REQUIRED name="Nombre" placeholder="Rosal rojo..." value="<?php echo $datos['Dato']->nombrepro;?>"/><br><br>
        Cantidad:<br/><input id="cant"type="text" REQUIRED name="Cantidad" placeholder="60,90,20,100...etc" value="<?php echo $datos['Dato']->cantexistencia;?>"/><br><br>
        Categoria: <br/><input id="categ"type="text" REQUIRED list="cate" name="Categoria" placeholder="Elije una opcion..." value="<?php echo $datos['Dato']->categoria;?>"/><br><br>

                    <datalist id="cate">
                        <option value="Ofertas">
                        <option value="Flores">
                        <option value="Orquideas">
                        <option value="De sombra">
                        <option value="Jardineria">
                    </datalist>

         Precio unitario:<br/><input type="text" id="precio" REQUIRED name="PrecioU" placeholder="$..." value="<?php echo $datos['Dato']->preciou;?>"/><br><br>
         Descripcion:<br/><br><input id="desc" type="text" id="desc" REQUIRED name="Descripcion" placeholder="Informacion del producto..." value="<?php echo $datos['Dato']->descripcion;?>"/><br><br>
         <input type="button" onclick="return confCancel()" name="Cancelar" value="Cancelar">
         <input  type="submit" value="Guardar"/>
         
    
        
     </form><br><br>
        </center>      
    </main></body> 
</html>
