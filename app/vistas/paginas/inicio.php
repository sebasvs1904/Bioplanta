<?php
//puede ser require o include_once para mandar a llamar a as paginas 
require RUTA_APP.'/vistas/vc/heatP.html';
//echo RUTA_APP;
//echo RUTA_URL;
?>
<head>
    <link href="<?php echo RUTA_URL?>css/banner.css" rel="stylesheet" type="text/css"/>
</head>         
<body>
	<?php
	
	?>
<main>
            <section id="banner">
             <img src="<?php echo RUTA_URL?>img/farm.jpg">
              <div class="contenedor">
                <a href="<?php echo RUTA_URL?>iniciar">Login</a>     <a href="<?php echo RUTA_URL?>iniciar/regis" >Registrarse</a>  
                <h2>No solo cuidamos plantas, repartimos vidas hasta tu casa.</h2>
              </div>   
            </section>
</main>
</body>    
<?php
include_once("../app/vistas/vc/footP.html");
?>
