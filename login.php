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
    <title>Mi NuNú |Inicias Sesión aqui</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
    <div class="container">
        <form class="uk-form uk-form-horizontal register-form" style="height:400px;"  action="step1.php">
            <fieldset data-uk-margin style="margin-top: 10%;">
                <legend>Crea tu cuenta<span>¿Ya tienes cuenta?<a href="register">  Inicia Sesión</a></span></legend>
                <div class="uk-form-row">
                    <input type="email" placeholder="Correo electrónico" name="email" required>
                </div>
                <div class="uk-form-row">
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <div class="uk-form-row">
				    
                    <input class="uk-button boton-lila" type="submit" value="Entrar">
                </div>
                <a class="forgot" href="password-reset">¿Olvidaste tu contraseña?</a>
            </fieldset>
        </form>
         
		 
		
       
		
		
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
  </body>
</html>