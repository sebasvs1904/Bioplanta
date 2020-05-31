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
<!---vista de carrito----->
<head>
 <title>BIOPLANT</title> 
 <link href="<?php echo RUTA_URL?>css/buscador.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo RUTA_URL?>css/carro.css" rel="stylesheet" type="text/css"/>  
    
 
  
    
</head>
 
       
<body>

      
    
    <main>    
<div id="panelcar"> 
<?php 
require RUTA_APP.'/vistas/vc/heatCBus.html'; 
?>
<div id="botonescar">
            <a href="<?php echo RUTA_URL?>cliente/index">Home</a> 
            
    </div>

    
    <div id="internocar">
        <h3>Lista de productos</h3>
<?php
 
 ?>
<!--------------------------------------------------------------------------->
<table>
            <tr>
                <td>Cantidad</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Total</td>
                <td>Operacion</td>
            </tr>
            <?php
            if(!empty($_SESSION["agregar_carro"]))
            { $total = 0;
                foreach($_SESSION["agregar_carro"] as $keys => $values)
                {
                    ?>
                    <tr><td><?php echo $values["cantidadpro"]; ?></td>
                        <td><?php echo $values["nombrepro"]; ?></td>
                        <td>$<?php echo $values["preciopro"]; ?></td>
                        <td>$<?php echo number_format($values["cantidadpro"] * $values["preciopro"], 2);?></td>
                        <td> <blockquote id="quitar"><br>
                            <a href="<?php echo RUTA_URL?>cliente/quitar/<?php echo $values["idproduct"];?>">Quitar de carrito</a></blockquote></td>
                    </tr>
                   
                 <?php
        $total += ($values["cantidadpro"] * $values["preciopro"]);
                }
                ?>
                <br><!--nuevo-->
                  <blockquote id="quitar">
                 <a href="<?php echo RUTA_URL?>cliente/cancelar">Cancelar Compra</a>
                    </blockquote>
                <?php
            }else{
                ?><tr><td colspan="4" style="color: Blue" align="center">
    
    
    
                    <br><br>
                    <strong>No hay productos en tu carrito ☺</strong>
                    </td></tr>
                <?php
                }
                ?>
        </table>
      


        </div>
<!--------------------------------------------------------------------------->   
    
    
    <blockquote id="pago">
        <h3>Total a pagar: $ <?php if(!empty($total)){echo number_format($total, 2);}else{echo "0.00";} ?></h3><a id="elimip" href=<?php echo RUTA_URL?>cliente/confirmar/<?php echo $total; ?>">Comprar</a>
    </blockquote>

    
      <blockquote id="cartel">
          <center><h6>Tener los productos en la lista de compras no aseguran que esten apartados, hasta confirmar tu compra, gracias por tu comprención.</h6></center>      
    </blockquote>
             
           </div>   
<?php           
require RUTA_APP.'/vistas/vc/minifoot.html'; 

//include("../html/ .html");          
?>