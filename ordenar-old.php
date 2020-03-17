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
    <div class="container">
        <form action="maps.php" method="post">
            <input type="hidden" id="latFld">
            <input type="hidden" id="lngFld">
            <h2 class="morado-fuerte grande">Ordenar servicio</h2>
            <div class="uk-grid">
                <div class="uk-width-medium-1-2">
                    <p class="titulo-form morado-fuerte">Nombre</p>
                    <div class="uk-width-medium-1-2 input-form">
                        <input type="text" name="nombre">
                        <p class="nombre-field morado">Nombre</p>
                    </div>
                    <div class="uk-width-medium-1-2 input-form">
                        <input type="text" name="apellido">
                        <p class="nombre-field morado">Apellido</p>
                    </div>
                    <div class="clear"></div>
                    <p class="titulo-form morado-fuerte">Dirección</p> 
                    <div class="input-form">
                        <input type="text" name="calle">
                        <p class="nombre-field morado">Calle</p>
                    </div>
                    <div class="input-form">
                        <input type="text" name="numero">
                        <p class="nombre-field morado">Número</p>
                    </div>
                    <div class="input-form">
                        <input type="text" name="colonia">
                        <p class="nombre-field morado">Colonia</p>
                    </div>
                    <div class="input-form">
                        <input type="text" name="delegacion">
                        <p class="nombre-field morado">Delegación</p>
                    </div>
                    <div class="input-form">
                        <input type="text" name="cp">
                        <p class="nombre-field morado">Código Postal</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="uk-width-medium-1-2">
                    <p class="titulo-form morado-fuerte">Selecciona la ubicación exacta</p>
                    <div id="mapa">
                        <div id="map_canvas" style="height:400px;width:100%"></div>  
                    </div>
                </div>
                <div class="uk-width-1-1" id="form-abajo">
                    <p class="titulo-form morado-fuerte">Fecha y Hora</p>
                    <p class="subtitulo-form morado">¿Cuándo y a qué hora necesitas a tu NuNú?</p>
                    <div class="uk-width-medium-1-3 input-form fecha">
                        <?php 
                        $datetime = new DateTime('tomorrow');
                        ?>
                        <input type="date" name="fecha" min="<?php echo $datetime->format('Y-m-d'); ?>">
                        <p class="nombre-field morado">Fecha</p>
                    </div>
                    <div class="uk-width-medium-1-3 input-form fecha">
                        <input type="time" name="hora-inicio">
                        <p class="nombre-field morado">Hora de Inicio</p>
                    </div>
                    <div class="uk-width-medium-1-3 input-form fecha">
                        <input type="time" name="hora-fin">
                        <p class="nombre-field morado">Hora de Término</p>
                    </div>                
                    <div class="clear"></div>
                    <p class="titulo-form morado-fuerte">Edades y número de niños (máx 3)</p>
                    <p class="subtitulo-form morado">¿Para quién es tu NuNú?</p>
                    <div class="uk-width-medium-1-3 edad">
                        <img src="img/bebe.png">
                        <p class="subtitulo-form rosa">Bebé</p>
                        <input type="number" name="bebe" min="0" max="3" value="0">
                    </div>
                    <div class="uk-width-medium-1-3 edad">
                        <img src="img/pre-escolar.png">
                        <p class="subtitulo-form morado">Pre-escolar</p>
                        <input type="number" name="pre-escolar" min="0" max="3" value="0">
                    </div>
                    <div class="uk-width-medium-1-3 edad">
                        <img src="img/primaria.png">
                        <p class="subtitulo-form azul">Primaria</p>
                        <input type="number" name="primaria" min="0" max="3" value="0">
                    </div>
                    <div class="clear"></div>
                    <p class="titulo-form morado-fuerte">Actividades de tu NuNú</p>
                    <p class="subtitulo-form morado">¿En qué más necesitas ayuda?</p>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/snacks.png">
                        <input type="checkbox" name="actividad" value="snacks">
                        <span class="morado">Preparar snacks</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/panales.png">
                        <input type="checkbox" name="actividad" value="panales">
                        <span class="morado">Cambiar pañales</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/jugar.png">
                        <input type="checkbox" name="actividad" value="jugar">
                        <span class="morado">Jugar con niños</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/banar.png">
                        <input type="checkbox" name="actividad" value="banar">
                        <span class="morado">Bañar niños</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/dormir.png">
                        <input type="checkbox" name="actividad" value="dormir">
                        <span class="morado">Apoyo para dormir</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/siestas.png">
                        <input type="checkbox" name="actividad" value="siestas">
                        <span class="morado">Apoyo para tomas siestas</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/tarea.png">
                        <input type="checkbox" name="actividad" value="tarea">
                        <span class="morado">Ayuda con la tarea</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/deportes.png">
                        <input type="checkbox" name="actividad" value="deportes">
                        <span class="morado">Actividades deportivas</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/cuentos.png">
                        <input type="checkbox" name="actividad" value="cuentos">
                        <span class="morado">Leer cuentos e historias</span>
                    </div>
                    <div class="uk-width-1-2 uk-width-medium-1-5 activity">
                        <img src="img/enfermos.png">
                        <input type="checkbox" name="actividad" value="enfermos">
                        <span class="morado">Cuidarlos cuando estén enfermos</span>
                    </div>
                    <div class="clear"></div>
                    <p class="titulo-form morado-fuerte">Cometarios</p>
                    <p class="subtitulo-form morado">¿Algún comentario especial sobre el cuidado de tus hijos?</p>
                    <div class="input-form">
                        <textarea name="comentarios" rows="5"></textarea>
                    </div>
                    <div class="clear"></div>
                    <input type="submit" value="Continuar" class="boton-arcoiris" id="boton-ordenar">
                </div>
            </div>
        </form>
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