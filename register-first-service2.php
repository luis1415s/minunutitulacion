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
				<div class='elemento-menu-register'>
					<span class='icon-user-outline'></span>
					Crear Cuenta
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register'>
					<span class='icon-brief'></span>
					Horas y C.P.
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register' style="font-weight: bold;font-size: initial;">
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
    
	<div class="mapa-left">    
        <form class="uk-form uk-form-horizontal register-form" method="POST" action="register-first-service3.php">   
        
                									<!-- Que día y hora -->
            <fieldset data-uk-margin>
                <legend>¿Que día y hora necesitas a tu NuNú?</legend>
                
                <div class="uk-form-row">                
                      <div class="contenedor-horas">
                    		<label style="float:left;">Elige el día y hora de la visita</label>
                    		<div id="contenedor-dia">                    				
              					<input type="date" name="calendario" onchange="fechas();" id="calendario">
                    		</div>                    		                    		                    
                    </div>
                </div>
                                                               
                <div class="uk-form-row">
                      <div class="contenedor-horas">
                    		<label style="float:left;">Hora de llegada</label>
                    		<div id="contenedor-select">
                    			<select id="horai" onchange="horaInicio();">
                    				<option selected value="0">Selecciona una hora</option>
                    				<option value="7:00 AM">07:00 AM</option>
                    				<option value="8:00 AM">08:00 AM</option>
                    				<option value="9:00 AM">09:00 AM</option>
                    				<option value="10:00 AM">10:00 AM</option>
                    				<option value="11:00 AM">11:00 AM</option>
                    				<option value="12:00 PM">12:00 PM</option>
                    				<option value="1:00 PM">01:00 PM</option>
                    				<option value="2:00 PM">02:00 PM</option>
                    				<option value="3:00 PM">03:00 PM</option>
                    				<option value="4:00 PM">04:00 PM</option>
                    				<option value="5:00 PM">05:00 PM</option>
                    				<option value="6:00 PM">06:00 PM</option>                    			                    			
                    			</select>
                    		</div>                    		                    		                    
                    </div>
                </div>                                               
            </fieldset>
            
            <div class="espacio"></div>
            
            
            											<!-- Donde necesitas al nunu -->
            
            <fieldset data-uk-margin>
                <legend>¿Donde necesitas a tu NuNú?<span>Es muy importante que especifiques la dirección correctamente ya que NuNú usa estos datos para llegar.</span></legend>
                
                						<!-- Dirección -->
                <div class="uk-form-row">
                     <div class="contenedor-horas">
                    		<label style="float:left;">Dirección</label>
                    		<div id="contenedor-calle">                    				
              					<input type="text" name="direccion" id="autocomplete"  placeholder="Escribe una dirección" required>
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                      
                						<!-- Numero exterior e interior-->
                <div class="uk-form-row">                                
                		<div id="contenedor-intyext">
                			<div class="contenedor-horas" style="float:left;">
	                    		<label style="float:left;">Número exterior</label>
	                    		<div id="contenedor-numexterior">                    				
	              					<input type="text" id="street_number" name="num_exterior">
	                    		</div>                    		                    		                    
                    		</div>
                    		
                    		<div class="contenedor-horas" style="float:right;">
	                    		<label style="float:left;">Número interior</label>
	                    		<div id="contenedor-numinterior">                    				
	              					<input type="text" name="num_interior">
	                    		</div>                    		                    		                    
                    		</div>		
                		</div>
                </div>
                
                						<!-- Entidad federativa -->
                <div class="uk-form-row">                                
                		<div id="contenedor-entf">
                			<div class="contenedor-horas" style="float:left;">
	                    		<label style="float:left;">Entidad federativa</label>
	                    		<div id="contenedor-entidadf">                    				
	              					<input type="text" name="entidadf" id="locality">
	                    		</div>                    		                    		                    
                    		</div>
                    					<!-- Ciudad -->
                    		<div class="contenedor-horas" style="float:right;">
	                    		<label style="float:left;">Ciudad</label>
	                    		<div id="contenedor-ciudad">                    				
	              					<input type="text" name="ciudad" id="administrative_area_level_1">
	                    		</div>                    		                    		                    
                    		</div>		
                		</div>
                </div>
                
                						<!-- Colonia -->
                <div class="uk-form-row">                                
                		<div id="contenedor-colonia-calles">
                			<div class="contenedor-horas" style="float:left;">
	                    		<label style="float:left;">Colonia</label>
	                    		<div id="contenedor-colonia">                    				
	              					<input type="text" name="colonia" id="sublocality_level_1">
	                    		</div>                    		                    		                    
                    		</div>
                    					<!-- Delegación -->
                    		<div class="contenedor-horas" style="float:right;">
	                    		<label style="float:left;">Delegación</label>
	                    		<div id="contenedor-delegacion">                    				
	              					<input type="text" name="delegacion" id="administrative_area_level_3">
	                    		</div>                    		                    		                    
                    		</div>		
                		</div>
                </div>
                						<!-- Indicaciones extra -->
                 <div class="uk-form-row">
                     <div class="contenedor-horas">
                    		<label style="float:left;">Indicaciones extra</label><br>
                    		<div id="contenedor-extra">                    				
              					<textarea rows="4" name="extras" placeholder="Color de casa, entre que calles, etc..." cols="50"></textarea>
                    		</div>                    		                    		                    
                    </div>
				<?php
								switch($_POST['horas']) {
									case 3:
										$total= 240;
										break;
									case 3.5:
										$total=280;
										break;
									case 4:
										$total= 300;
										break;
									case 4.5:
										$total= 337.5;
										break;
									case 5:
										$total= 350;
										break;
									case 5.5:
										$total= 385;
										break;
								}								                    		
                    		 ?>                                                            
                </div>
                
				<div hidden="hidden">                
	                <input type="text" name="name"  value="<?php echo $_POST[name]; ?>">
	                <input type="text" name="lastName"  value="<?php echo $_POST[lastName]; ?>">
	                <input type="text" name="email"  value="<?php echo $_POST[email]; ?>">
	                <input type="text" name="phone"  value="<?php echo $_POST[phone]; ?>">
	                <input type="text" name="pass"  value="<?php echo $_POST[pass]; ?>">
	                <input type="text" name="pass2"  value="<?php echo $_POST[pass2]; ?>">
	                
	                <input type="text" id="frecuencia" name="frecuencia" value="<?php echo $_POST['frecuencia']; ?>">
	              <input type="text" id="horas" name="horas" value="<?php echo $_POST[horas]; ?>">
	                <input type="text" id="cp" name="cp" value="<?php echo $_POST[cp]; ?>">
	                
	                <input type="text" name="total" id="total" value="<?php echo $total; ?>">
	                <input type="text" name="fechaInput" id="fechaInput">
	                <input type="text" name="horaIni" id="horaIni">
					<input type="text" name="horas" id="horas">
	                
	
	                <input type="text" name="lat" id="lat"  required>
	                <input type="text" name="lng" id="lng"  required>
                </div>
                
                
                <p>Con este mapa tu NuNú llegará a la dirección, por favor verifica que está correcto.</p>
                <div class="espacio"></div>
                           
                
                <div id="mapa">
                   <div id="map" style="height:400px;width:100%"></div>  
                </div>
                
                
                
                <div class="uk-form-row">
                    <input class="uk-button boton-lila" type="submit" value="Continuar">
                </div>
            </fieldset>
        </form>
        <div class="espacio"></div>
     </div>
     								<!-- RESUMEN -->
     <div class="resumen-right">
     		<div class="espacio"></div>
			<form class="uk-form uk-form-horizontal register-form" style="float:left;width:50%;">
				 <fieldset data-uk-margin>
                <legend>Resumen</legend>
                
                <div class="uk-form-row">                
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Horas:</label>
                    		<label class="derecha" id="horas"><?php echo $_POST['horas']; ?></label>    

							

							
                    </div>
                </div>
                                                               
                <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Fecha:</label>
                    		<label class="derecha" id="fecha"></label>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Hora Inicio:</label>
                    		<label class="derecha" id="HoraInicio"></label>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Frecuencia:</label>
                    		<label class="derecha" id="frecuencia"><?php echo $_POST['frecuencia']; ?></label>                    		                 		                    		                    
                    </div>
                </div>
                
                <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<strong><label class="izquierda">Subtotal:</label></strong>                    		
                    		<strong><label class="derecha fucsia" id="subtotal"><?php echo "$".$total; ?></label></strong>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<strong><label class="izquierda">Total:</label></strong>
                    		<strong><label class="derecha fucsia" id="frecuencia"><?php echo "$".$total; ?></label></strong>                    		                 		                    		                    
                    </div>
                </div>   
                
                                                              
            </fieldset>
			</form>     
     </div>

        <div class="espacio"></div>


        <div class="clear"></div>
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKOAfdHiBvXl7XW2HggUvq0_-VdrHWZcA&callback=initMap"
        async defer></script>-->
        
        
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKOAfdHiBvXl7XW2HggUvq0_-VdrHWZcA&signed_in=true&libraries=places&callback=initMap"
        async defer></script>		
		

		
     <script>
     

var map;
var markers = [];
var marker = [];
var address = [];
var countLatLng = 1;
var countMarker = 1;
var geocoder;

$("#autocomplete").keydown(function(event){
    if(event.keyCode == 13){
        event.preventDefault();
    }
});

var componentForm = {
    street_number: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    administrative_area_level_3: 'short_name',
    sublocality_level_1: 'short_name',
};

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 19.432438598971746, lng: -99.13470268249512},
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    geocoder = new google.maps.Geocoder();

    var input = document.getElementById("autocomplete");
    var searchBox = new google.maps.places.SearchBox(input);

    searchBox.addListener('places_changed', function(e) {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        var bounds = new google.maps.LatLngBounds();
        
      	
			var lat = map.getCenter().lat();
  			var lng = map.getCenter().lng();
         document.getElementById('lat').value = lat;
         document.getElementById('lng').value = lng;

        places.find(function(place) {

            

            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }
            
            
            

            for (var i = 0; i < place.address_components.length; i++) {

                var addressType = place.address_components[i].types[0];
                
                

                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }

            if (place.geometry.viewport) {

                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        	
        map.fitBounds(bounds);
        
    });
}
				
				// Termina Google Maps homms
				
	 function fechas() {
	 		var fechaSel=document.getElementById("calendario").value;
			document.getElementById("fecha").value = "";
			document.getElementById("fecha").innerHTML =fechaSel ;	
			
			document.getElementById("fechaInput").value = "";
			document.getElementById("fechaInput").value =fechaSel ;	 	
	 }
	 
	 function horaInicio() {
	 		var horaSel=document.getElementById("horai").value;
			document.getElementById("HoraInicio").value = "";
			document.getElementById("HoraInicio").innerHTML = horaSel ;		
			
			document.getElementById("horaIni").value = "";
			document.getElementById("horaIni").value = horaSel ;	 	
	 }        
         



    </script>
    
    
  </body>
</html>