<?php 
$section="precios";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Precios</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link href="css/main.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/modernizr.js"></script>
    <link href="css/main.css" rel="stylesheet"/>  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <?php include ('analytics.php') ?>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- End Flexslider -->
    <link href="css/main.css" rel="stylesheet"/>
  </head>
  <body>
    <?php include ('header.php') ?>
    <div class="container">
        <h1 class="morado grande center espacio-texto-top"><b>Precios</b></h1>
        <div id="precios">
            <a class="ventana formulario formulario2" href="#">
                <h2>NuNú Ocasional</h2>
                <div class="def" id="lista-alt">
                    <p class="morado-fuerte">$170 p/h</p>
                    <p class="morado-fuerte">Min. 3 horas</p>
                    <ul>
                        <li class="libros fucsia">NuNú capacitada</li>
                        <li class="bebe fucsia">NuNú confiable</li>
                        <li class="tarjeta fucsia">Solo paga las horas utilizadas</li>
                        <li class="carreola fucsia">Tu NuNú puede variar</li>                                               
                    </ul> 
                </div>
                <div class="clear"></div>
                <?php include('pedir.php') ?>
            </a>
            <a class="ventana formulario formulario2" href="#">
                <h2>NuNú Frecuente</h2>
                <div class="def" id="alt-base">
                    <p class="morado-fuerte">$130 p/h</p>
                    <p class="morado-fuerte">Min. 3 horas</p>
                    <ul>
                        <li class="libros fucsia">NuNú capacitada</li>
                        <li class="bebe fucsia">NuNú confiable</li>
                        <li class="tarjeta fucsia">Solo paga las horas utilizadas</li>
                        <li class="libros fucsia">Visitas calendarizadas en un horario fijo.</li>
                        <li class="carreola fucsia">Tu misma NuNú en cada visita</li>
                    </ul>
                </div>
                <div class="clear"></div>
                <?php include('pedir.php') ?>
            </a>
            
        </div>
    </div>   
    <div class="clear"></div>
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/uikit.min.js"></script>-->
    <script defer src="js/jquery.flexslider.js"></script>
<!--
    <script type="text/javascript">
	$('.info-m').on('click',function(){
		  swal({
		  title: '¡Déjanos tus datos!',
		  showCancelButton: true,            
		  html: '<p>Pronto nos pondremos en contacto contigo para darte más información sobre MiNuNú.</p><label>Nombre:</label><input id="swal-input1" type="text" class="swal2-input" autofocus><label>Correo:</label><input id="swal-input2" type="email" class="swal2-input" required>',
		  preConfirm: function() {
			return new Promise(function(resolve) {

					if($('#swal-input1').val()==""){            
						return false;
					}else{
						var nombre = $('#swal-input1').val();
					}

					if($('#swal-input2').val()==""){            
						return false;
					}else{
						var correo = $('#swal-input2').val();
					}
				
				

				jQuery.post("registerclients.php", {
				nom:nombre,
				maill:correo

			  }, function(data, textStatus){
				console.log(data);
				console.log("-------------");

				if(data == 1){
				  //$('#res').html("Datos insertados.");
				  //$('#res').css('color','green');
				  
					sweetAlert(
					  '¡Gracias!',
					  'Pronto, nos pondremos en contacto contigo',
					  'success'
					)
				 

				}
				else{
				  console.log(data);
					sweetAlert(
					  '¡Ooops!',
					  'Ocurrió un error, inténtalo de nuevo',
					  'error'
					)
				}
			  });




			});
		  }
		}).then(function(result) {
			sweetAlert(
			  'Datos insertados...',
			  'ya se insertaron!',
			  'success'
			)
		}).done();		
	});
	
        var altura= $( '#alt-base' ).height();    
        $('#lista-alt').css('height',altura);   
    </script>
    -->
  </body>
</html>