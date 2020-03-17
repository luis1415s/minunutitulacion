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
	     
	            <h1 class="morado-fuerte grande">Programa un nuevo servicio</h1>
	            <h4 class="morado">¿Qué tipo de servicio necesitas?</h4>
	            
		            
			            <input type="button" class="boton-h-azul" style="margin-left:20%;" value="Cada semana">
			            <input type="button" class="boton-h-azul" style="margin-left:5%;" value="Solo una vez">
		            
		         
					<div class="clear"></div>	
					<div style="height:50px;"></div>	         
		         
		         
					
						<h4 class="morado" >¿Cuantas horas necesitas?</h4>
		         	<input type="number" name="horas" min="1" max="8" value="1" required>
							         
		         
		         
		         <h3 class="morado">1. Elige el día del servicio</h3>
		         <div style="margin-left:40%;">
			         <div class="uk-width-medium-1-3 input-form fecha">
	                        <?php 
	                        $datetime = new DateTime('tomorrow');
	                        ?>
	                        <input type="date" name="fecha" min="<?php echo $datetime->format('Y-m-d'); ?>">
	                        <p class="nombre-field morado">Fecha</p>
	                    </div>
               </div>
                    
               <h3 class="morado">2. Selecciona la hora que más te convenga</h3>
               
               <div style="margin-left:30%;width:100%;">
	               	<input type="button" class="boton-h-blanco" value="8:00 AM">               	
							<input type="button" style="margin-left:1%;" class="boton-h-blanco" value="9:00 AM">						
							<input type="button" style="margin-left:1%;" class="boton-h-blanco" value="10:00 AM">
	               
	            </div>
	            <div class="clear"></div>
	            <div style="margin-left:30%;width:100%;">             
	               
	               	<input type="button" class="boton-h-blanco" value="11:00 AM">
							<input type="button" style="margin-left:1%;" class="boton-h-blanco" value="12:00 PM">						
							<input type="button" style="margin-left:1%;" class="boton-h-blanco" value="1:00 PM">
               </div>
               <div class="clear"></div>
               <a href="step2.php"><input type="button" class="boton-arcoiris" value="Continuar"></a>
	            
	         
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