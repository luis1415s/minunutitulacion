<?php 
$section="home";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú prueba</title> <!--version 1.1 si vez esto luis mandame varios "XD"-->

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/form1.css">
    <link rel="stylesheet" href="css/buttons.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/modernizr.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- End Flexslider -->
      
    <link href="css/main.css" rel="stylesheet"/> 
	<div id="fb-root"></div>
	<script>
	(function(d, s, id){
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); 
	  js.id = id;
	  js.src = "http://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	
    <?php include ('analytics.php') ?>
  </head>
    
  <body>
  	<?php include ('header.php') ?>
    <!--<div id="main-slider">
		<div class="uk-container uk-container-center nunu-descr">
			<div class="uk-grid">
				<div class="uk-width-medium-4-6 uk-width-small-* uk-push-1-6 uk-text-center">
					<h2 class="morado grande center">¿Qué es MiNuNú?</h2>
					<p class="paragraph">MiNuNú es un plataforma en donde encontrarás niñeras (NuNús) 100% capacitadas, a través de la 
					página web. MiNuNú selecciona y certifica a las mejores niñeras del país para que cuiden de 
					tus hijos cada que lo necesites, en la comodidad de tu hogar. </p>			
				</div>
			</div>
		</div>
    </div>
    <div class="clear"></div>
	<div class="full-width">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2 uk-width-small-1-2 que-hace uk-vertical-align">
				<div class="uk-panel uk-vertical-align-middle uk-text-center">
					<h3>¿Qué hace MiNuNú?</h3>
					<p>
					En MiNuNú establecemos un enlace entre familias que requieren apoyo en el cuidado de sus hijos, con una red de niñeras capacitadas.					
					</p>
				</div>
			</div>
			<div class="uk-width-medium-1-2 uk-width-small-1-2 mision uk-vertical-align"> 
				<div class="uk-panel uk-vertical-align-middle uk-text-center">
					<h3>Misión</h3>
					<p>
					Hacer más fácil  la vida de las familias mexicanas que requieren ayuda en el cuidado de sus hijos, brindándoles la opción segura y confiable de contratación de niñeras capacitadas a domicilio. 					
					</p>				
				</div>			
			</div>
		</div>				
	</div>
	<div class="uk-container uk-container-center">
		<h3 class="morado grande center">Solicita o agenda tu primera visita.</h3>
		<div class="uk-grid">
			<div class="uk-width-small-* uk-width-medium-4-6 uk-push-1-6 uk-text-center">
				<p class="paragraph"><br>Ya tenemos NuNús capacitadas para tí, conoce cómo funciona nuestro servicio,
				compártenos tus datos y te contactarémos de inmediato para agendar la primera visita.  </p>					
			</div>
		</div>
	</div>-->
	<!--<div class="full-width">
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
					<label>Teléfono fijo o celular</label>
					<div class="uk-form-controls">
						<input type="text" name="teléfono" required />	
					</div>
					<div class="uk-grid">
						<div class="centrar">
							<input type="submit" class="morado uk-text-bold" value="ENVIAR" />
						</div>
					</div>
				</form>				
			</div>			
		</div>
	</div>
	<div class="full-width play-business">
		<div class="uk-grid">
			<div class="uk-width-medium-4-6 uk-push-1-6 uk-vertical-align uk-text-center center-center">
					<div class="uk-vertical-align-middle">
						<img src="img/play-logo.png" width="80%"alt="play-business" />	
						<br>¡Invierte en este único y gran proyecto!
						<br>Estás a un click de ver crecer tu inversión y formar parte los socios <br>MINUNÚ.
						<br>
						<a href="https://playbusiness.mx/minunu" target='_blank' class="uk-button uk-text-bold">INVERTIR AHORA</a>					
					</div>
			</div>
		</div>
	</div>	-->
	<!--<div class="full-width unete">
		<div class="uk-grid">
			<div class="uk-width-medium-4-6 uk-width-small-* uk-push-1-6 uk-text-center">
				<h3 class="title">¡Únete a MiNuNú!</h3>
				<p>MiNuNú es una plataforma segura y profesional, que ofrece servicio de niñeras (NuNús) a través<br> de la web. 
				Está diseñada para que tú generes un ingreso mensual extra a tus actividades <br>cotidianas.</p>
				<div class="uk-grid back-morado">
					<div class="uk-width-medium-1-2 uk-width-small-1-2 unete-1"><!-- unete-1-->
						<!--<img src="img/unete-1.png" alt="Ser una nunú" />-->     
						<!--<div class="center-top all-5 uk-text-left">
						<p>
							<span class="morado">Ser una NuNú tiene muchas ventajas:</span><br>
							- Generarás un ingreso extra.<br>
							- Tu decides cuantas horas quieres trabajar semanalmente.<br>
							- Nosotros te capacitamos y respaldamos para que brindes un servicio profesional y de alta calidad.<br>
							- Nuestro servicio es muy confiable, pues estamos muy al pendiente de las familias que solicitarán tu servicio.<br>
							<br><span class="blue">Es muy facil ser parte de MiNuNú, sólo debes cumplir estos 3 requisitos:</span><br>
							1. Gusto por los niños.<br>
							2. Experiencia min. de 200 hrs en el cuidado de niños.<br>
							3. Excelente actitud de servicio.
							
							
						</p>
						</div>
					</div>-->
					<!--<div class="uk-width-medium-1-2 uk-width-small-1-2 unete-2 uk-text-left padding-right-25"><!-- unete-1-->
						<!--<img src="img/unete-2.png" alt="Ser una nunú" />-->
						<!--<form action="#" id="soy-nunu" class="center-center" onsubmit="return asynMail('#soy-nunu','ser_nunu');" method="POST">
							<div class="uk-form-row left-10">
								<label for="nombre_nunu">Nombre completo</label><br>							
								<input type="text" name="nombre_nunu" required>
							</div>
							<div class="uk-form-row left-10">
								<label for="email_nunu">E-mail</label><br>	
								<input type="email" name="email_nunu" required>
							</div>
							<div class="uk-form-row left-10">
								<label for="telefono_nunu">Télefono fijo o celular</label><br>
								<input type="tel" name="telefono_nunu" required>
							</div>
							<div class="uk-form-row uk-text-center">
								<input type="SUBMIT" class="morado uk-text-bold" value="QUIERO SER NUNÚ">							
							</div>
						</form>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<div class="full-width facebook">
		<div class="uk-grid">
			<div class="uk-width-medium-4-6 uk-push-1-6 uk-text-center center-center">
				<h3 class="title rosse">¡Síguenos en Facebook!</h3>	
				<div class="fb-page" data-href="https://www.facebook.com/minunu.oficial/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/minunu.oficial/" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/minunu.oficial/">MiNuNú</a>
					</blockquote>
				</div>				
			</div>
		</div>
	</div>-->
	
	 <div class="container">
        
    	<br>
        
        <div class="col-md-12">
            <div id="carousel_1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    
                    <!--Barra de indicadores-->
                    <li data-target="#carousel_1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_1" data-slide-to="1" ></li>
                    <li data-target="#carousel_1" data-slide-to="2"></li>
                    
                </ol>
                
                <!--capa para contener los slide-->
                <div class="carousel-inner" role="listbox"> 
                    <!--la clase "carousel-inner" le indica 
                    al navegador que el div contiene un slide, y con el atributo (role="listbox") 
                    le decimos que este slide seguira una secuencia tipo lista--> 
                    
                    <div class="item active"> <!--El primer item debera contener la clase "active para 
                                                que podamos visualizarlo"-->
                        
                        <img src="img/slider/banner-mi-nunu-1.jpg" class=" img-responsive"> <!--añadimos la clase "img-responsive" para asegurar 
                                                                                        la correcta visualizacion en cualquier dispositivo-->
                        <div class="carousel-caption hidden-xs"> <!--Esta capa nos sirve para agregar texto, 
                                                                    se mostrara por encima de las imagenes con 
                                                                    "hidden-xs" lo ocultamos en pantallas pequeñas-->
                            <!--<h4>La seguridad de tu hijo es nuestro compromiso.</h4>
                            <p>Conoce nuestro servicio de niñeras profesionales. Desde $75 por hora</p>-->
                        </div>
                        
                    </div>
                    
                    <div class="item">
                        
                        <img src="img/slider/banner-mi-nunu-2.jpg" class=" img-responsive">
                        
                        <div class="carousel-caption hidden-xs">
                          
                        </div>
                        
                    </div>
                    
                    <div class="item">
                        
                        <img src="img/slider/banner-mi-nunu-3.jpg" class=" img-responsive">
                        
                        <div class="carousel-caption hidden-xs">
                           
                        </div>
                        
                    </div>
                    
                    <!--Elementos de control (Prev & Next)-->
                    <a class="left carousel-control " href="#carousel_1" role="button" data-slide="prev">
                    	 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					 <span class="sr-only">Previous</span>
                    </a>
                    
                    <a class="right carousel-control " href="#carousel_1" role="button" data-slide="next">
                    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
                    </a>
                    
                </div>
                
            </div>
        </div>	
        
    </div> 
	
	
	

    <div class="container">
        <div class="uk-grid">
            <div class="uk-width-medium-1-3 spec">
                <img src="img/minunu-1.png"> 
                <h4>Confianza</h4>
                <p>Todas nuestras NuNús cuentan con el perfil que necesitas para el óptimo cuidado de tus hijos. </p>
            </div>
            <div class="uk-width-medium-1-3 spec">
                <img src="img/minunu-2.png"> 
                <h4>Transparencia</h4>
                <p>Conocerás el perfil de tu NuNú tan pronto como contrates el servicio.</p>
            </div>
            <div class="uk-width-medium-1-3 spec">
                <img src="img/minunu-3.png"> 
                <h4>Respeto</h4>
                <p>Porque sabemos que tu hogar y tu familia son lo más importante para ti.</p>
            </div>
            <div class="uk-width-1-1">
            	<input type="button" class="boton-arcoiris" name="btnpide" value="Pide tu NuNú" onclick="document.getElementById('id01').style.display='block'">
                <!--<a href="#" class="boton-arcoiris formularioh">Pide tu <strong>NuNú</strong></a>-->
            </div>
            <div id="id01" class="w3-modal">
            <br><br><br>
            <div class="w3-modal-content">
                <div class="w3-container">
                <!--<span id="close" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">X</span>-->
                    <div class="titform">
                        <h3 id="tf">¡Déjanos tus datos!</h3>
                        <p id="pf">Pronto nos pondremos en contacto contigo para darte más información sobre MiNuNú.</p>
                    </div>
                    <div class="form1">
                        <form name="miformulario" id="miformulario" method="post">
                            <div class="ndiv">
                                <input type="text" name="nom" id="name1" autocomplete="off"  placeholder="Nombre" required>
                            </div>
                            <div class="ediv">
                                <input type="text" name="mail1" id="email1" autocomplete="off"  placeholder="Correo electronico" required>
                            </div>
                            <div class="buttons">
                                <button class="button" type="submit" id="btEnviar" formaction="enviarEmail.php">Enviar</button>
                                <button id="btc" class="button" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-bottom">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
            </div>
        </div>
    </div>
  <div class="full-width full-width-home garantia">
        <div class="uk-grid">
            <div class="uk-width-medium-6-10 left">
                <h3>Nosotros garantizamos que tu NuNú cuenta con:</h3>
                <ul>
                    <li>Certificación Proceso Capacitación <strong>MiNunú</strong>
                        <ul>
                            <li>Curso en el cuidado y desarrollo de los niños </li>
                            <li>Curso de primeros auxilios avalado por <a href="http://www.vivecer.com.mx/" target="_blank" style="font-weight:bold;">Vivecer</a></li>                            
                        </ul>
                    </li>
                    <li>Referencias de experiencia mínima 200 hrs. en el cuidado de niños verificadas</li>
                    <li>Entrevista en persona</li>
                    <li>Referencias personales verificadas</li>
                    <li>Carta de antecedentes no penales</li>
                    <li>Escolaridad mínima preparatoria</li>
                    <li>Certificado médico de buena salud</li>
                    <li>Excelente presentación personal</li>
                    <li>La mejor actitud de servicio</li>
                </ul>
            </div>
            <div class="uk-width-medium-4-10">
                <img src="img/garantia-minunu.png">
            </div>
        </div>
        
    </div>
    <div class="container">
        <h2 class="morado grande center">¿Por qué utilizar MiNuNú?</h2>
        <div class="uk-grid">
            <div class="uk-width-medium-1-3 why">
                <img src="img/puntualidad.png"> 
                <h4 class="morado">Puntualidad</h4>
                <p>Tu NuNú llegará siempre a tiempo.</p>
            </div>
            <div class="uk-width-medium-1-3 why">
                <img src="img/proteccion.png"> 
                <h4 class="morado">Protección</h4>
                <p>Garantizamos la seguridad de tus hijos en todo momento.</p>
            </div>
            <div class="uk-width-medium-1-3 why">
                <img src="img/ayuda.png"> 
                <h4 class="morado">Ayuda</h4>
                <p>Tu NuNú se adecuará a apoyarte con tus hijos según tus recomendaciones.</p>
            </div>
            <div class="uk-width-medium-1-3 why">
                <img src="img/flexibilidad.png"> 
                <h4 class="morado">Flexibilidad</h4>
                <p>Sin contratos y pagando el tiempo utilizado durante la visita. </p>
            </div>
            <div class="uk-width-medium-1-3 why">
                <img src="img/responsabilidad.png"> 
                <h4 class="morado">Responsabilidad</h4>
                <p>Nuestra empresa y cada NuNú tienen el compromiso de cumplir con lo establecido en cada visita.</p>
            </div>
            <div class="uk-width-medium-1-3 why">
                <img src="img/tarjeta.png"> 
                <h4 class="morado">Pago con tarjeta</h4>
                <p>Paga en línea de manera sencilla y con los más altos estándares de seguridad. </p>
            </div>
        </div>
    </div> 
    <div class="full-width full-width-home2">
    </div>
    <div class="container">
        <div class="uk-grid">
            <div class="uk-width-1-1 center">
                <h3 class="round morado">mi niñera en un click</h3>
                <!--CODIGO DEL BOTON Y FORM-->
                <div class="uk-width-1-1">
                <input type="button" class="boton-arcoiris" name="btnpide" value="Pide tu NuNú" onclick="document.getElementById('id01').style.display='block'">
                <!--<a href="#" class="boton-arcoiris formularioh">Pide tu <strong>NuNú</strong></a>-->
                </div>
                <div id="id01" class="w3-modal">
                <br><br><br>
                <div class="w3-modal-content">
                    <div class="w3-container">
                    <!--<span id="close" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">X</span>-->
                        <div class="titform">
                            <h3 id="tf">¡Déjanos tus datos!</h3>
                            <p id="pf">Pronto nos pondremos en contacto contigo para darte más información sobre MiNuNú.</p>
                        </div>
                        <div class="form1">
                            <form name="miformulario" id="miformulario" method="post">
                                <div class="ndiv">
                                    <input type="text" name="nom" id="name1" autocomplete="off"  placeholder="Nombre" required>
                                </div>
                                <div class="ediv">
                                    <input type="text" name="mail1" id="email1" autocomplete="off"  placeholder="Correo electronico" required>
                                </div>
                                <div class="buttons">
                                    <button class="button" type="submit" id="btEnviar" formaction="enviarEmail.php">Enviar</button>
                                    <button id="btc" class="button" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-bottom">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>            
                </div>
                </div>
                <!--TERMINA CODIGO DEL BOTON Y FORM-->
                <!--<input type="button" class="boton-arcoiris formularioh" name="btnpide" value="Pide tu NuNú" action="">-->
                <!--<a href="#" class="boton-arcoiris formularioh">Pide tu <strong>NuNú</strong></a>-->
            </div>
        </div>
    </div>
      
    
    <div class="clear"></div>
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.css" />
    <script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.js"></script>
      

    <!-- FlexSlider -->
      
      <script defer src="js/jquery.flexslider.js"></script>
      
      <!-- ESTO SE COMENTARIZÓ DEBIDO A QUE NO TUVO EFECTO  //////

      <script type="text/javascript">
		$( ".uk-close" ).click(function() {
			var contain_alert = $('header').height(); 			
			var alto_alert    = $('.alerta').height();
			var final_operation = contain_alert - alto_alert;
			$('body').css('margin-top',final_operation);
		});
        /*///////////////////////////////////////////////*/
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




    $('document').ready(function(){
            $('.formularioh').click(function(){
                ventana();
            });
        });

        function ventana(){
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
              /*$('#res').html("Datos insertados.");
              $('#res').css('color','green');
              */
     
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

     /////////////////////////// */
         }









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
    /////////////////////////////AQUI TERMINA LO COMENTARIZADO-->
    <!-- End FlexSlider -->
  </body>
</html>