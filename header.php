<header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <meta name="google-site-verification" content="vs7XQQfM2le6paz5FxyXfks-3K1HcZabT6W79rt5Y_k" />

	<!--<div class="full-width alerta" style="margin:0px;">
			<div class="uk-alert alerta-prov" data-uk-alert>
				<a href="" class="uk-alert-close uk-close"></a>
				<!--<span class="glyphicon glyphicon-remove esconder" aria-hidden="true">cerrar</span>	
				<div class="uk-grid">
					<div class="uk-width-medium-4-10 uk-push-1-10">
						<p><b class="notif-alert">¡Pide tu servicio por Télefono!</b><br>
						Déjanos tus datos y te contactaremos a la brevedad</p>
					</div>
					<div class="uk-width-medium-4-10 uk-push-1-10" style="margin-top:9px;">
						<form action="#" id="pedir" method="POST">
						<input type="tel" name="telephone" placeholder="Teléfono" required>
						<input type="text" name="code" placeholder="Código postal" required>
						<input type="submit" value="Solicitar llamada">
						</form>
					</div>
				</div>
			</div> 				
	</div> -->
    <nav class="uk-navbar">
        <a href="index.php"><img src="img/logo-minunu.png" class="brandLogo uk-navbar-brand uk-hidden-small"></a>
        <ul id="main-menu" class="uk-navbar-nav uk-hidden-small">
            <li <?php if($section == "home")echo "id=current" ?>>
                <a href="index.php">Inicio</a>
            </li>
            <li <?php if($section == "como-funcionamos")echo "id=current" ?>>
                <a href="como-funcionamos">¿Cómo funcionamos?</a>
            </li>
            <li <?php if($section == "precios")echo "id=current" ?>>
                <a href="precios">Precios</a>
            </li>
			<li <?php if($section == "equiponunu")echo "id=current" ?>>
                <a href="equiponunu.php">Nuestro Equipo</a>
            </li>
            <li <?php if($section == "preguntas-frecuentes")echo "id=current" ?>>
                <a href="preguntas-frecuentes">Preguntas frecuentes</a>
            </li>
			<li <?php /*if($section == "Iniciar Sesión")echo "id=current"*/ ?>>
                <a href="register">Iniciar Sesión</a>
            </li>

        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="clear"></div>
    </nav>
</header>

<script type="text/javascript">
    //var test= $( 'header>.uk-navbar' ).height();  
	var test= $( 'header' ).height();  	
    $('body').css('margin-top',test);
	//Ajax para solicitar una llamada
	$('#pedir').on('submit',function(e){
		e.preventDefault();
		var form = $(this);
		var post = $(this).serialize();
		$.ajax({
		  method: "POST",
		  url: "send-email.php?actionMethod=solicitar-llamada",
		  data: post 
		})
		  .done(function( msg ) {
			$('#pedir')[0].reset();	
			switch(msg){
				case '0':
					//Fail
						swal(
						  'Oops...',
						  'No se pudo procesar tu solicitud intenta nuevamente!',
						  'error'
						)				
				break;
				case '1':
					//Fail
						swal(
						  'Oops...',
						  'Por favor completa todos los campos solicitados!',
						  'error'
						)
				break;				
				case '3':
					//mail ok
						swal(
						  'Gracias!',
						  'Tu mensaje ha sido enviado, a la brevedad nos comunicamos contigo!',
						  'success'
						)
				break;
				case '4':
					//Fail
						swal(
						  'Oops...',
						  'Intenta nuevamente, en este momento no podemos atenderte!',
						  'error'
						)					
				break;				
			}
		  });		
	});
	function asynMail(id,action){
		var form = $(id);
		var post = form.serialize();
		$.ajax({
		  method: "POST",
		  url: "send-email.php?actionMethod="+action,
		  data: post 
		})
		  .done(function( msg ) {
			$(id)[0].reset();	
			switch(msg){
				case '0':
					//Fail
						swal(
						  'Oops...',
						  'No se pudo procesar tu solicitud intenta nuevamente!',
						  'error'
						)				
				break;
				case '1':
					//Fail
						swal(
						  'Oops...',
						  'Por favor completa todos los campos solicitados!',
						  'error'
						)
				break;				
				case '3':
					//mail ok
						swal(
						  'Gracias!',
						  'Tu mensaje ha sido enviado, a la brevedad nos comunicamos contigo!',
						  'success'
						)
				break;
				case '4':
					//Fail
						swal(
						  'Oops...',
						  'Intenta nuevamente, en este momento no podemos atenderte!',
						  'error'
						)					
				break;				
			}
		  });	
		return false;
	}
</script>