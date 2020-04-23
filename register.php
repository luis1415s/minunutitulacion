<?php 
$section="register";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Pide tu Servicio</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
    <div class="container-principal-register">
    
															<!-- pruebas -->    
<div class='wizard-progress wizard-progress-4'>
	<div class='container-menu-register'>
		<div class='row-register'>
			<div style="width:100%;">
				<div class='elemento-menu-register' style="font-weight: bold;font-size: initial;">
					<span class='icon-user-outline'></span>
					Datos Generales
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register'>
					<span class='icon-brief'></span>
					Horas y C.P.
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register'>
					<span class='icon-calendar-outline'></span>
					Fecha y Dirección
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register'>
					<span class='icon-happy-face'></span>
					Pago
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
			</div>
		</div>
	</div>
</div>															
															
															
															
															<!-- Terminan pruebas -->    
    <div class="espacio"></div>
    <div class="espacio"></div>
    
        <form class="uk-form uk-form-horizontal register-form" method="POST" action="register2.php">
            <fieldset data-uk-margin>
            <!--
                <legend>Crea tu cuenta<span>¿Ya tienes cuenta?<a href="login">  Inicia sesión</a></span></legend>-->
                <legend>Solicita tu servicio!</legend>
                <div class="uk-form-row">
                    <input type="text" placeholder="Nombre(s)" name="name" required>
                </div>
                <div class="uk-form-row">
                    <input type="text" placeholder="Apellidos" name="lastName" required>
                </div>
                <div class="uk-form-row">
                    <input type="email" placeholder="Correo electrónico" name="email" required>
                </div>
                <div class="uk-form-row">
                    <input type="tel" placeholder="Teléfono" name="phone" required>
                </div>
                <!--<div class="uk-form-row">
                    <input type="password" placeholder="Contraseña" id="pass" name="pass" required>
                </div>
                <div class="uk-form-row">
                    <input type="password" placeholder="Confirma tu contraseña" id="pass2" onkeyup="verify(this.value);" name="pass2" required>
                    <label id="respuesta"></label>
                </div>
                -->

                <!--
                <div class="uk-form-row reg-terms">
                    <input type="checkbox" name="terms" required> Al crear tu cuenta estás aceptando los <a href="terminos-condiciones">Términos y Condiciones</a> del servicio
                </div>
                -->
                <div class="uk-form-row reg-terms">
                    <input type="checkbox" name="terms" required> Al continuar, aceptas y estás de acuerdo en que tus datos serán tratados de manera confidencial y exclusiva por MiNuNú.
                </div>
                <div class="uk-form-row">
                    <input class="uk-button boton-lila" type="submit" value="Crear cuenta y continuar">
                </div>
            </fieldset>
        </form>
        
        <div class="espacio"></div>
        <div class="espacio"></div>

        <div class="clear"></div>
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
    
       <script type="text/javascript">
       
       var etiqueta= document.getElementById("respuesta");
       function verify(pass2) {
       	var pass1= document.getElementById("pass").value;
       	if (pass1==pass2) {
       		etiqueta.innerHTML="<label style='color:#89C96B;'>OK</label>";
       	}else {
       		etiqueta.innerHTML="<label style='color:#AD4138;'>Las contraseñas no coinciden</label>";
       	}
       }
        </script>
        
  </body>
</html>