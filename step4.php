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
	    
	    	<h1>Tu niñera se llama Martha</h1>
	    	
	    	<div id="contenedor-foto">
	    		<img src="img/martha.png" alt="martha">
	    	
	    	</div>
	    	
	    	<h2>Nombre:</h2>
	    	<p>Martha Wayne</p>
	    	
	    	<h2>Edad:</h2>
	    	<p>26 años</p>
	    	
	    	<h2>Contacto:</h2>
	    	<p>(55)21596754</p>
	    		    	
	    	<h2>Tu niñera llegará el:</h2>
	    	<p>Jueves 24 de Diciembre del 2015</p>
	    		    	
	    	<h2>A las:</h2>
	    	<p>12:00 PM</p>
	    	
	    	<input type="button" class="boton-h" style="margin-left:30%;" value="X Cancelar Servicio"/>
	    		<div class="clear"></div>
	    	<div style="width: 50%;margin-left:25%;">
	    	<p>*Políticas de cancelación: Cancelar visita mínimo 5 horas antes de la cita programada, de no ser así, estarás sujeto a un cargo de $200</p>
	    	</div>
	     
	
	            
	         
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