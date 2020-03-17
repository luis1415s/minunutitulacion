<?php 
$section="ordenar";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Ordenar</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />      
    <link href="css/main.css" rel="stylesheet"/> 
      
    <?php include ('analytics.php') ?>
  </head>
  <body onload="initMap()">
  	<?php include ('header.php') ?>
	    
	<div class="contenedor-principal">
	    <div class="register-left">
	     
	          <h1>6. Reservar servicio</h1>
	          <h2>Reserva tu NuNú pagando un deposito con tu tarjeta bancaria</h2>
	          
	       <div style="height:100px;"></div>
	       
	       <form name="tarjeta">
		       <input type="text" class="form-servicio" id="nombre-tarjeta" placeholder="Nombre de tarjeta" required>
		       <br><br><input type="text" class="form-servicio" placeholder="Número de tarjeta" id="numero-tarjeta" required>
		       <br><br><input type="text" style="height: 50px;width: 24%;color: #990099;" placeholder="Mes de expiración" id="mes-expiracion" required>
		       <input type="text" style="height: 50px;width: 25%;color: #990099;" placeholder="Año de expiración" id="ano-expiracion" required>
		       <br><br><input type="text" class="form-servicio" placeholder="CVC" id="cvc" required>
		       <br><br><br>
		       
			   <div class="clear"></div>
               <a href="step4.php"><input type="button" class="boton-arcoiris" value="Reservar"></a>
               
               <div style="height:50px;"></div>
			   
			   
			   
			   
		       
	       </form>   
	       
	       <p>*Los cargos serán por hora completa dependiendo del número de horas contratadas.</p>
	       <p>*Tiempo excedente serán considerados por fracciones de 30 mins.</p>
	            
	         
	    </div>
	    	    
	    
	      
	    			<!-- Div de la derecha -->
	    			
	    <div class="register-right">
	    <div style="height:100px;"></div>
	    
	    	<div style="margin-left:5%;">
	    		<h3 style="font-weight:bold;color:white;">Resúmen</h3>
	    	</div>
	    	
	    	<div style="text-align: center;">
		    	<p>Dirección: Toltecas 166 int.
		    	Torre C, Dpto 1215 San Pedro de los Pinos</p>	    	
		    	<p>Duración del servicio: 3 horas</p>	    	
		    	<p>Pago: tarjeta VISA con terminacion 6920</p>
		    	<p>Fecha y hora: 24 de Diciembre 2015, 12:00 PM</p>
		    		
		    		<img src="img/garantia.png" style="margin-top: 50%;" alt="garantia">
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
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        var map;
        var markersArray = [];

        function initMap()
        {
            var latlng = new google.maps.LatLng(19.432891, -99.132972);
            var myOptions = {
                zoom: 11,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            // add a click event handler to the map object
            google.maps.event.addListener(map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);

                // display the lat/lng in your form's lat/lng fields
                document.getElementById("latFld").value = event.latLng.lat();
                document.getElementById("lngFld").value = event.latLng.lng();
            });
        }
        function placeMarker(location) {
            // first remove all markers if there are any
            deleteOverlays();

            var marker = new google.maps.Marker({
                position: location, 
                map: map
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
        }

        // Deletes all markers in the array by removing references to them
        function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;
            }
        }
    </script>
  </body>
</html>