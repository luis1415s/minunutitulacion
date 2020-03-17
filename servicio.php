<?php 
$section="service";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Servicio</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
    <div class="container">
        <h2 class="morado grande">Tu niñera se llama Laura:</h2>
        <div class="uk-grid">
            <div class="uk-width-medium-1-2">
                <div class="img-servicio">
                    <img src="img/servicio.jpg">
                </div>
                <a href="#" class="boton">X Cancelar servicio</a>
                <p class="subtitulo azul">Sobre Laura</p>
                <p class="morado">Estudiante de la UP, en la carrera de administración de hogares, quinto semestre.
“Me considero una niña de corazón, me ecnata convivir con los niños, creo que ellos son la inspiración que debería motivarnos a hacer mejores personas para dejarles un mundo mejor”.</p>
            </div>
            <div class="uk-width-medium-1-2">
                <p class="subtitulo azul">Nombre</p>
                <p class="subtitulo morado">Laura Velasco Torres</p>
                <p class="subtitulo azul">Edad</p>
                <p class="subtitulo morado">26 años</p>
                <p class="subtitulo azul">Contacto</p>
                <p class="subtitulo morado">(55) 21 59 67 54</p>
                <p class="subtitulo azul">Tu niñera llegará el:</p>
                <p class="subtitulo morado">Martes 27 de Octubre del 2015</p>
                <p class="subtitulo azul">A las:</p>
                <p class="subtitulo morado">4:50 pm</p>
                <p class="grande morado">¡Gracias por confiar en MiNuNú!</p>
            </div>
        </div>
    </div>  
    <div class="clear"></div>
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
      
    <!-- FlexSlider -->
      <script defer src="js/jquery.flexslider.js"></script>
      <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            directionNav: false,
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
    <!-- End FlexSlider -->
  </body>
</html>