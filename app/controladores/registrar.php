<?php
/**
 * 
 */
class registrar extends Controlador
{

public function index()
	{
		        include("Modelo/Conectar.php");

		$nombre=$_POST['nombre'];
	$ApePat=$_POST['ApePat'];
	$ApeMat=$_POST['ApeMat'];
	$user=$_POST['user'];
	$FechaNac=$_POST['FechaNac'];
	$Telefono=$_POST['Telefono'];
	$e_mail=$_POST['correo'];
	$Password=$_POST['Password'];
	$calle=$_POST['calle'];
	$municipio=$_POST['municipio'];
	$cp=$_POST['CP'];
	$estado=$_POST['estado'];
	$numero=$_POST['numero'];
	$Numeracion=$_POST['Numeracion'];
	$CVV=$_POST['CVV'];
	$FechaVenc=$_POST['FechaVenc'];
	// realiza un consulta para verificar que el nombre de usuario y correo no se encuentren en la base de datos
	$veri_us=mysqli_query($conexion, "SELECT * FROM cliente WHERE nombreusuario='$user'");
	$veri_co=mysqli_query($conexion, "SELECT * FROM cliente WHERE email='$e_mail'");
	// si la base de datos no esta vacia
	if(!(mysqli_num_rows($veri_us)==null) && !(mysqli_num_rows($veri_co)==null))
	{
		//verifica la consulta encontro algun nombre de usurio igual en la base de datos
			if(mysqli_num_rows($veri_us)>0)
			{
				echo "<script> alert('El nombre de usuario ya esta registrado')</script>";
				exit();// termina la ejecucion del php 
			}
			//verifica si la consulta enconto algun correo igual en la base de datos
			if(mysqli_num_rows($veri_co)>0)
			{
				echo "<<script> alert('El nombre de usuario ya esta registrado')</script>";
				exit();// termina la ejecucion del php 
			}
	}
// en caso contrario inserta los valores en la base de datos 
	$sql="INSERT INTO direccion( calle, cp, municipio, estado, num_casa) VALUES ('$calle','$cp','$municipio','$estado','$numero')";
		//hacemos la secuencia sql
	$ejecutar=$conexion->query($sql);
	$s= mysqli_insert_id($conexion);
	echo "El ultimo id es: ".$s;

	$sql1="INSERT INTO cliente ( nombrecli, apellidop, apellidom, nombreusuario, fecha_nac, telefono, email, clavecli, iddireccion) VALUES ('$nombre','$ApePat','$ApeMat','$user','$FechaNac','$Telefono','$e_mail','$Password','$s')";
	$ejecutar2=$conexion->query($sql1);
		$s2= mysqli_insert_id($conexion);
	echo "El ultimo id es: ".$s2;
	//hacemos la secuencia sql
	$sql2="INSERT INTO tarjeta (numcuenta, cvv, fechavenc, idcliente)  VALUES ('$Numeracion','$CVV','$FechaVenc','$s2')";

	$ejecutar3=$conexion->query($sql2);

	//verificamos la ejecucion
	if(!($ejecutar && $ejecutar2 && $ejecutar3)){
		echo "Hubo algun error";
	}else{

            	session_start();
            	 $_SESSION['usuario']=$_POST['user'];
            	 
                  $mostrar=$this->modelo('Productos');
                     $datos= [
                        'Titulo'=>"Productos",
                          'Productos'=>$mostrar->Mostrarproductos()];
                 $this->vista('paginas/Catalogo',$datos);
            	
            	}
	




 

}

		# code...
	}	//conectarnos con servidor

	//recuperar las variables
	
	
	?>