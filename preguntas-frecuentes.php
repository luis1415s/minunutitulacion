<?php 
$section="preguntas-frecuentes";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Preguntas frecuentes</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
    <div class="container">
        <h1 class="morado grande center espacio-texto-top">Preguntas frecuentes</h1>
        <div class="pf">
            <h2 class="pf-tit">¿Quiénes somos?</h2>
            <div class="pf-cuadro">
                <p>Las fundadoras de MiNuNú tenemos más de 13 años de experiencia en la República Mexicana reclutando niñeras para trabajar en Estados Unidos con USAuPair.</p>
            </div>
            <h2 class="pf-tit">¿Quién es una NuNú?</h2>
            <div class="pf-cuadro">
                <p>Jóvenes con el perfil y experiencia necesarios para el cuidado de niños en distintas etapas. Cada NuNú cuenta con al menos 200 horas de experiencia comprobables. Tienen escolaridad mínima de preparatoria.</p>
            </div>
            <h2 class="pf-tit">Garantía MiNuNú</h2>
            <div class="pf-cuadro">                
                <ul>
                    <li>Certificación Proceso Capacitación MiNuNú</li>
                        <ul>
                            <li>Curso en el cuidado y desarrollo de los niños</li>
                            <li>Curso de primeros auxilios avalado por <a href="http://www.vivecer.com.mx/" target="_blank" style="font-weight:bold;">Vivecer</a></li>
                        </ul>
                    <li>Referencias de experiencia mínima 200 hrs. en el cuidado de niños verificadas</li>
                    <li>Entrevista en persona</li>
                    <li>Referencias personales verificadas</li>
                    <li>Carta de antecedentes no penales</li>
                    <li>Escolaridad mínima preparatoria</li>
                    <li>Certificado médico de buena salud</li>
                    <li>Excelente presentación personal</li>
                    <li>La mejor actitud de servicio</li>
                </ul>
                <img id="garantia" src="img/garantia.png">
            </div>
            <h2 class="pf-tit seg">Seguridad y confianza</h2>
            <div class="pf-cuadro">
                <ul>
                    <li>Tu NuNú siempre será puntual</li>
                    <li>Tu NuNú será responsable de tus hijos desde el momento en que llegue a tu hogar</li>
                    <li>Obtendrás el perfil completo de tu NuNú al momento de contratarnos</li>
                    <li>Tus datos personales serán utilizados por MiNuNú de manera confidencial</li>
                    <li>Tu NuNú respetará en todo momento el ambiente de tu hogar</li>
                </ul>
            </div>
            <h2 class="pf-tit">Compromisos de Nuestra Empresa</h2>
            <div class="pf-cuadro">
                <p><strong>Puntualidad de tu NuNú:</strong> se consideran 15 minutos de tolerancia, en caso de que se excedan, obtendrás un descuento en tu próxima visita.</p>
                <p><strong>MiNuNú no llegó:</strong> en el raro caso de que  tu NuNú no se presente, te pediemos que te comuniques con nosotros para ofrecerte una solución inmediata,  además, obtendrás un descuento para la próxima visita de tu NuNú.</p>
                <p><strong>Políticas de cancelación:</strong> podrás cancelar la visita de tu NuNú mínimo 5 horas antes de la cita programada, de no ser así, estarás sujeto a un cargo de $200.</p>
            </div>
            <h2 class="pf-tit">Pagos a MiNuNú</h2>
            <div class="pf-cuadro">
                <p><strong>Aceptamos tarjetas</strong> de débito y crédito (VISA, MASTERCARD y AMERICAN EXPRESS).</p>
                <p><strong>No</strong> se aceptan pagos en efectivo, ni propinas a tu NuNú.</p>
                <p><strong>Registro de la visita:</strong> tu NuNú reportará la duración real de la visita al momento de salir de tu hogar; con base a información, se realizará el cargo a tu tarjeta.</p>
                <p><strong>Detalles de los cargos:</strong> los cargos se realizan por hora completa dependiendo el número de horas contratadas.</p>
                <p><strong>En caso de exceder el tiempo contratado:</strong> ¡No te preocupes!  los cargos serán considerados por fracciones de 30 min.</p>
            </div>
        </div>
        
       <!-- <a href="#" class="boton-arcoiris formulario">Pide tu <strong>NuNú</strong></a>
        <div class="clear"></div>-->
    </div> 
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
    <?php include("contactanosventana.php"); ?>
  </body>
</html>