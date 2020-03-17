<footer>
	<div class="uk-container uk-container-center uk-text-center">
		<!--<ul class="uk-subnav uk-flex-center">
			<li><a href="">Inicio</a></li>
			<li><a href="">Garantía MiNuNú</a></li>
			<li><a href="">Cómo funciona</a></li>
			<li><a href="">Precios</a></li>
			<li><a href="">Preguntas frecuentes</a></li>	
            <li><a href="">Iniciar Sesión</a></li>			
			
		</ul>-->
		<div class="uk-grid">
			<div class="uk-width-medium-1-3 uk-push-1-3">
					<img src="img/logo-minunu-white.png">
			</div>
			<div class="uk-width-medium-1-3 uk-push-1-3 uk-vertical-align">
				<div class="uk-panel uk-vertical-align-bottom">
					<div class="social-m uk-text-left">
						<img src="img/whatsapp.png"  alt="Whatsapp minunu"/>
						<p>Mándanos un mensaje por WhatsApp al:
						5543616870</p>
					</div>
					<div class="social-m uk-text-left">
						<img src="img/mail.png"  alt="contacto minunu"/>
						<p>O escríbenos a: contacto@minunu.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--<div class="container">				
					<ul class="uk-grid uk-grid-width-1-5">
						<li class="uk-width-1-5"><a href="">Inicio</a></li>
						<li class="uk-width-1-5"><a href="">Garantía MiNuNú</a></li>
						<li class="uk-width-1-5"><a href="">Cómo funciona</a></li>
						<li class="uk-width-1-5"><a href="">Precios</a></li>
						<li class="uk-width-1-5"><a href="">Preguntas frecuentes</a></li>
					</ul>				
				
                <img src="img/logo-minunu-white.png">
                <!--<p>Teléfono:</p>
                <a href="tel: 47535523">47535523</a>
                <p>Horario de oficinas:</p>
                <p>Lunes a Viernes de 9:00 a 18:00 hrs.</p>-->
          
          <!--  <div class="uk-width-medium-1-3">
                <h3>Ayuda</h3>
                <ul id="menu-footer">
                    <li>
                        <a href="como-funcionamos">¿Cómo funcionamos?</a>
                    </li>
                    <li>
                        <a href="precios">Precios</a>
                    </li>
                    <li>
                        <a href="preguntas-frecuentes">Preguntas frecuentes</a>
                    </li>
                    <li>
                        <a href="aviso-privacidad">Aviso de privacidad</a>
                    </li>
                    <li>
                        <a href="terminos-condiciones">Términos y condiciones</a>
                    </li>
                </ul>
            </div>
            <div class="uk-width-medium-1-3">
                <ul id="redes-sociales">
                    <li class="fb"><a href="facebook.com" target="_blank">Facebook</a></li>
                    <li class="tw"><a href="twitter.com" target="_blank">Twitter</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
                <h3>¿Quieres formar parte de nuestro equipo?</h3>
                <p>Envía tu solicitud para unirte a <strong>MiNuNú</strong></p>
                <a href="#" class="boton formulario2">¡Únete a MiNuNú!</a>
            </div>-->
     
    </div>
    <div class="clear"></div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.css" />
<script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/4.1.7/sweetalert2.js"></script>

<script type="text/javascript">
        $('document').ready(function(){
            $('.formulario2').click(function(){
                //ventana();
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
        }

    </script>


</footer>