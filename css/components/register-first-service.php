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
    <title>Mi NuNú | Registro</title>

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
				<div class='elemento-menu-register' >
					<span class='icon-user-outline'></span>
					Crear Cuenta
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register' style="font-weight: bold;font-size: initial;">
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
    
        <form class="uk-form uk-form-horizontal register-form"  method="POST" action="register-first-service2.php">
            <fieldset data-uk-margin>
                <legend>¿Cada cuanto necesitas un NuNú?</legend>
                
                						<!-- Botones -->
                <div class="uk-form-row">
						  <div id="contenedor-botones">
							  	<div id="semana" class="botones-margen" onclick="semana();" style="float:left;">							  	
							  		<h2>Cada semana</h2>
							  		<span>Tu NuNú cada semana</span>
							  	</div>
							  	<div id="una-vez" class="botones-margen" onclick="una();" style="float:right;"> 
							  		<h2>Sólo una vez</h2>
							  		<div style="width:100%;margin:auto;">
							  			<span>Una NuNú distinta en cada visita</span>
							  		</div>
							  	</div> 
						  </div>                                        
                </div>
                
                
                <div class="uk-form-row">
                    <div class="contenedor-horas">
                    		<label style="float:left;">¿Cuantas horas necesitas?</label>
                    		<div id="contenedor-select">
                    			<select id="op-horas" onclick="horass();">
                    				<option selected value="3">3 horas, $80 la hora</option>
                    				<option value="3.5">3 horas y media, $80 cada hora</option>
                    				<option value="4">4 horas, $75 cada hora</option>
                    				<option value="4.5">4 horas y media, $75 cada hora</option>
                    				<option value="5">5 horas, $70 cada hora</option>
                    				<option value="5.5">5 horas y media, $70 cada hora</option>
                    			
                    			</select>
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                
                <div class="uk-form-row">
                      <div class="contenedor-horas">
                    		<label style="float:left;">¿Cuál es tu código postal?</label>
                    		<div id="contenedor-postal">
                    			<input type="text" id="cp" name="cp" placeholder="tu código postal en la CDMX" required pattern="[0-9]{5}" />
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                <input type="text" name="name" hidden="hidden" value="<?php echo $_POST[name]; ?>">
                <input type="text" name="lastName" hidden="hidden" value="<?php echo $_POST[lastName]; ?>">
                <input type="text" name="email" hidden="hidden" value="<?php echo $_POST[email]; ?>">
                <input type="text" name="phone" hidden="hidden" value="<?php echo $_POST[phone]; ?>">
                <input type="text" name="pass" hidden="hidden" value="<?php echo $_POST[pass]; ?>">
                <input type="text" name="pass2" hidden="hidden" value="<?php echo $_POST[pass2]; ?>">
                
                <input type="text" id="frecuencia" name="frecuencia" hidden="hidden">
                <input type="text" id="horas" name="horas" hidden="hidden">
                
                
                
                <div class="uk-form-row">
                    <input class="uk-button boton-lila" type="submit" value="Continuar">
                </div>
            </fieldset>
        </form>
        
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
	
	function semana() {
	document.getElementById("frecuencia").value = "";
   document.getElementById("frecuencia").value = "Semanal";
   
   	
	var s=document.getElementById("semana");
	s.style.background= "#C3FFF9";
	var u=document.getElementById("una-vez");
	u.style.background= "#D6D6D6";	
	}	
	
	function una() {
	document.getElementById("frecuencia").value = "";
	document.getElementById("frecuencia").value = "Solo una vez";
	
	var s=document.getElementById("semana");
	s.style.background= "#D6D6D6"; 
	var u=document.getElementById("una-vez");
	u.style.background= "#C3FFF9";
	
	}
	
	function horass() {
	var horaSel=document.getElementById("op-horas").value;
	document.getElementById("horas").value = "";
	document.getElementById("horas").value =horaSel ;
	}
	
	$(document).ready(function () {
    $("#codigopostal").keyup(function () {
        var value = $(this).val();
        $("#cp").val(value);
	    });
	});
	
            

	</script>      
    
  </body>
</html>