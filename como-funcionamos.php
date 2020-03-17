<?php 
$section="como-funcionamos";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Cómo funcionamos</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link href="css/main.css" rel="stylesheet"/>
    <!-- Flexslider -->
    
    <script src="js/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/uikit.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- End Flexslider -->
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
   <!-- <div class="container nunu-descr">
	<div class="uk-container uk-container-center">
		<h3 class="morado grande center">Solicita o agenda tu primera visita.</h3>
		<div class="uk-grid">
			<div class="uk-width-small-* uk-width-medium-4-6 uk-push-1-6 uk-text-center">
				<p class="paragraph"><br>Ya tenemos NuNús capacitadas para tí, conoce cómo funciona nuestro servicio,
				compártenos tus datos y te contactaremos de inmediato para agendar la primera visita.  </p>					
			</div>
		</div>
	</div>
	<div class="full-width">
		<div class="uk-grid">
			<div class="uk-width-small-1-2 uk-width-medium-1-3 uk-hidden-small imagen-agenda uk-text-center">
				<img src="img/garantiaminunu.png" alt="Garantía minunu" />
			</div>
			<div class="uk-width-small-* uk-width-medium-1-3 form-agenda">
				<p class="uk-text-center">Recibe a tu primera nunú en la comodidad de tu hogar y con la seguridad que tus hijos están en buenas manos. </p>
				<form id="firsv" onsubmit="return asynMail('#firsv','primer_visita');" >
					<label>Nombre completo</label>
					<div class="uk-form-controls">
						<input type="text" name="nombre" required />				
					</div>
					<label>E-mail</label>
					<div class="uk-form-controls">				
						<input type="email" name="email" required />
					</div>
					<label>Télefono fijo o celular</label>
					<div class="uk-form-controls">
						<input type="text" name="telefono" required />	
					</div>
					<div class="uk-grid">
						<div class="centrar">
							<input type="submit" class="morado uk-text-bold" value="ENVIAR" />
						</div>
					</div>
				</form>				
			</div>			
		</div>
	</div>-->	
       <h1 class="morado grande center espacio-texto-top">¿Cómo funcionamos?</h1>
        <div class="pf mar-b">
            <div class="paso">
                <img src="img/como-funciona1.png">
                <p>1. Haz click en <strong>“Pide tu NuNú”.</strong></p>
            </div>
            <div class="paso">
                <img src="img/como-funciona2.png">
                <p>2. Regístrate y selecciona <strong>el servicio y características</strong> de tu NuNú.</p>
            </div>
            <div class="paso">
                <img src="img/como-funciona3.png">
                <p>3. Selecciona <strong>fecha y horario</strong> del servicio.</p>
            </div>
            <div class="paso">
                <img src="img/como-funciona4.png">
                <p>4. Recibe en tu correo electrónico <strong>la confirmación y el perfil de la NuNú</strong> que te fue asignada.</p>
            </div>
            <div class="paso">
                <img src="img/como-funciona5.png">
                <p>5. Una vez terminado el servicio <strong>recibirás de manera segura,</strong> el cargo a tu tarjeta de crédito o débito.</p>
            </div>
        </div>
        <?php include ('pedir.php') ?>
        <br><br>
        <!--<a href="#" class="boton-arcoiris formulario">Pide tu <strong>NuNú</strong></a>
        <div class="clear"></div>-->
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
</html>