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
                <h1 class="title is-2">Ingresar al sistema</h1>

                <form name="frmdatos" action="checausr.php" method="POST">
                <div class="field">
                  <label class="label">Nombre</label>
                  <div class="control">
                    <div class="columns">
                        <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith"></div>
                    </div>
                  </div>
                </div>

                <div class="field">
          <label class="label">Email</label>
          <div class="control"><div class="columns">
                        <div class="column is-two-fifths">
            <input class="input" type="email" id="email" name="email" placeholder="e.g. alexsmith@gmail.com"></div>
                    </div>
          </div>
        </div>

        <div class="control">
                  <button id="enviar" name="enviar" class="button is-success">&nbsp;Enviar datos&nbsp;</button>
                </div>
                </form>

        </div>
        </div>
    </div>

<?php require("piepagina.php")?>
</body>
</html>