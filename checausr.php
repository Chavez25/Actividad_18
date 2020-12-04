<!DOCTYPE HTML>
<html>
<head>
	<title>Envio de informaci&oacute;n</title>
</head>
<body>
  <?php require("cabecera.php") ?>
    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2">Bienvenido al Sistema</h1>
                <?php 
                    $post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
                    (isset($_POST['email']) && !empty($_POST['email']));
                if($post){
                    $nombre = $_POST['nombre'];
                    $correo = $_POST['email'];

                    echo "<span class='tag is-light'>Nombre:</span> ",$nombre;
                    echo "<br>";
                    echo "<span class='tag is-light'>Correo:</span> ",$correo;
                }else{ 
                    echo "<div class='notification is-danger'>
                    <button class='delete'></button>
                    Error en el envio de la información
                    </div>";
                }
                ?>
    		</div>
        </div>
    </div>
<?php require("piepagina.php")?>
</body>
</html>