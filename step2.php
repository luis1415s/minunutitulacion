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
	     
	            <!--<h1 class="morado-fuerte grande">Programa un nuevo servicio</h1>-->
	            <h4 class="morado">3. Edades y número de niños (máx3)</h4>
	            <h6>¿Para quién es tu Nunú?</h6>
	            
		            
			            <!-- BEBE | PREESCOLAR | PRIMARIA (IMÁGENES) -->
			        <div style="width: 100%;" >
			            <div id="bebe" style="margin-left: 18%;" class="imagenes-h">
								<img src="img/bebe.png" alt="bebe">
								<p>Bebé</p>
								<input type="number" min="1" max="3" value="0"/>			            			            
			            </div>
			            
			            <div id="prescolar" class="imagenes-h">
			            	<img src="img/pre-escolar.png" alt="pre-escolar">
			            	<p>Pre-escolar</p>
			            	<input type="number" min="1" max="3" value="0"/>
			            </div>
			            
			            <div id="primaria" class="imagenes-h">
			            	<img src="img/primaria.png" alt="primaria">
			            	<p>Primaria</p>
			            	<input type="number" min="1" max="3" value="0"/>
			            </div>
			       </div>
		            
		         
					<div class="clear"></div>	
					<div style="height:50px;"></div>	         
		         
		         
					
						<h4 class="morado" >4. Actividades de tu Nunú</h4>
						<h6>¿en qué mas necesitas ayuda?</h6>
		         	
		       <div id="contenedor-actividades" style="width:100%;">
		        
			        	<div class="imagenes-h-activities" style="margin-left: 20%;">
							<img src="img/snacks.png" class="activities" alt="snacks">
							<p>Preparar snacks</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/panales.png" class="activities" alt="panales">
							<p>Cambiar pañales</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/jugar.png" class="activities" alt="jugar">
							<p>Jugar con los niños</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/banar.png" class="activities" alt="banar">
							<p>Bañar niños</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/dormir.png" class="activities" alt="dormir">
							<p>Apoyo para dormir</p>								        	
			        	</div>
		        
		       </div>
							         
		         	<div class="clear"></div>
		         
				  <div id="contenedor-actividades2" style="width:100%;">
		        
			        	<div class="imagenes-h-activities" style="margin-left: 20%;">
							<img src="img/siestas.png" class="activities" alt="siesta">
							<p>Apoyo para tomar siestas</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/tarea.png" class="activities" alt="tarea">
							<p>Ayuda con la tarea</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/deportes.png" class="activities" alt="deportes">
							<p>Actividades deportivas</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/cuentos.png" class="activities" alt="cuentos">
							<p>Leer cuentos e historias</p>								        	
			        	</div>
			        	
			        	<div class="imagenes-h-activities">
							<img src="img/enfermos.png" class="activities" alt="enfermos">
							<p>Cuidarlos cuando estén enfermos</p>								        	
			        	</div>
		        
		        </div>		         
		         
		         
		         <div class="clear"></div>
		         
		         <h3 class="morado">5. Comentarios</h3>
		         <h6>¿Algún comentario especial sobre el cuidado de tus hijos?</h6>
		         
		         <textarea rows="4" cols="50">
		         </textarea>
		    

               <div class="clear"></div>
               <a href="step3.php"><input type="button" class="boton-arcoiris" value="Confirmar"></a>
               
               <div style="height:50px;"></div>
	            
	         
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