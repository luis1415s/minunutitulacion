<?php 
$section="login";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Nueva Contraseña</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
    <div class="container">
        <form class="uk-form uk-form-horizontal register-form">
            <fieldset data-uk-margin>
                <legend>¿Olvidaste tu contraseña?<span>Escribe tu correo electrónico y te enviaremos un correo para cambiar tu contraseña.</span></legend>
                <div class="uk-form-row">
                    <input type="email" placeholder="Correo electrónico" name="email" required>
                </div>
                <div class="uk-form-row">
                    <input class="uk-button boton-lila" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>

        
        
        <div class="clear"></div>
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
  </body>
</html>