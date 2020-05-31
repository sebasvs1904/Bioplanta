<?php
//puede ser require o include_once para mandar a llamar a as paginas 
require RUTA_APP.'/vistas/vc/heatP.html';
//echo RUTA_APP;
//echo RUTA_URL;
?>

<head>
<link href="<?php echo RUTA_URL?>css/main.css" rel="stylesheet" type="text/css"/>
</head>
  <body bgcolor=#45B39D> 
    <form id="regis" method="post" action="<?php echo RUTA_URL;?>/iniciar/validarRegistro">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
         Tipo de ingreso: 
            <select name="Opcion" onclick="mostrar(value)"> 
              <option value="Cliente">Cliente</option> 
              <option value="Administrador">Administrador</option>
            </select>
            <script type="text/javascript">
              function mostrar(value) {
                if( value=="cliente")
                  document.getElementById('premio').style=block;
                    
                  </style>
                // body...
              }
            </script>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p><br><br>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
  
        <p>No tienes una cuenta registrate <a href="<?php echo RUTA_URL?>iniciar/regis"> aqu&iacute;</a> (El registro es solo para clientes no administradores)</p>
      </form></body>
<?php
include_once("../app/vistas/vc/footP.html");
?>


