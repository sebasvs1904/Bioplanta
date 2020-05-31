
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuario</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL?>css/est.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?>js/municipios.js"></script>
    <script type="text/javascript" src="<?php echo RUTA_URL?>js/select_estados.js"></script>
</head>
<body> 

	<div class="form">
		<h2>REGISTRO USUARIO</h2>
		<h4>Datos Generales</h4>

		<form action="<?php echo RUTA_URL;?>/registrar" method="POST">

		<p>Nombre
		<input type="text" name="nombre" placeholder="Nombre" required></p>

		<p>Apellido Paterno
		<input type="text" name="ApePat" placeholder="ApePat" required></p>

		<p>Apellido Materno
		<input type="text" name="ApeMat" placeholder="ApeMat" required></p>

		<p>Nombre de Usuario
		<input type="text" name="user" placeholder="usu_1234" required></p>

		<p>Fecha de Nacimiento
		<input type="date" name="FechaNac" placeholder="FechaNac" required></p>
                    
		<p>Contraseña
		<input type="password" name="Password" placeholder="Password"></label></p>
		<p>Confirmar Contraseña
		<input type="password" name="Password" placeholder="Password"></label></p>

		<p>E-mail
		<input type="email" name="correo" placeholder="alguien@algo.com" required></p>

		<p>Telefono
		<input type="text" name="Telefono" placeholder="Telefono" required></p>

		<h4>Dirección </h4>
		<p>C.P</p>
		<input type="text" name="CP" placeholder=CP required>
       	<p>Estado</p>
            <select id="estado" name="estado"></select>
        <p>Municipio</p>
            <select id="municipio" name="municipio"></select>
        <p>Calle</p>
		<input type="text" name="calle" placeholder=calle required>
		<p>Numero</p>
		<input type="text" name="numero" placeholder=numero required>
		
		<h4>Informacion de la Tarjeta </h4>
		<p>Numero de Tarjeta</p>
		<input type="text" name="Numeracion" placeholder=NumerodeTarjeta required>

		<p>CVV</p>
		<input type="text" name="CVV" placeholder="CVV" required>
		 
		<p> Fecha de vencimiento</p>
        <input id="FechaVenc" name="FechaVenc" placeholder=**/** required>
		<br>
		<input type="submit" value="Registrar">
		¿ya tienes una cuenta? <a href = "<?php echo RUTA_URL?>iniciar" >iniciar sesion </a>
	</form>

</div>
</body>
</html>