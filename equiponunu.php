<?php 
$section="equiponunu";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Equipo</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/form1.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
    <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
    <!-- Flexslider -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/modernizr.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- End Flexslider -->
    <link href="css/main.css" rel="stylesheet"/>
</head>
<style>
    body{
        background-image: url("./img/bg.jpg") !important;
    }
    p{
        text-align: center;
    }
    #respo{        
        display:inline-block;
        width: 200px;
        height: 200px;
        padding: 10px;
        margin: 50px;
    }
    #respodiv{
        text-align: center;
    }
    #borim
    {
        border: 5px solid #6A9EB2;
    }
</style>
<body>
    <?php include ('header.php') ?>
    <!-- A PARTIR DE ESTE PUNTO, ESTOS DIV MUESTRAN LAS IMÁGENES DE LAS NIÑERAS, SE MUESTRA DEBAJO DE ELLAS SU NOMBRE
    SU EDAD, INFORMACIÓN COMO: Especialidad o estudios extras Y horas de servicio que tiene -->
    <div class="templatemo-team" id="templatemo-about">
        <div class="container">
            <div class="row">
                <div class="templatemo-line-header">
                    <div class="text-center">
                        <p><font color="#E9B0E6"><h1>CONOCE A NUESTRO EQUIPO</h1></font></p>
                        <br>
                        <p><h2>Ellas son nuestras NuNús <font color="#C48FD8">ESTRELLAS</font></h2></p>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <ul class="row row_team">
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img id="borim" src="img/n1_1.jpg" class="img-responsive" alt="member 1" />
                                <!--<div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>-->
                            </div>
                            <div class="team-inner">
                            <!--AQUÍ SE DEBE TOMAR EL NOMBRE DE LAS NIÑERAS-->
                                <p class="team-inner-header"><h3><font color="#727272"/>Sofia Medina</h3></p>
                                <br>
                                <p class="team-inner-header"><h4><font color="#727272"/>32 años</h4></p>
                                <p class="team-inner-header"><h4><font color="#727272"/>696 horas en servicio</h4></p>
                            </div>
                        </div>                        
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                            <div class="member-thumb">
                                <img id="borim" src="img/n2_1.jpg" class="img-responsive" alt="member 2" />
                                <!--<div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>-->
                            </div>
                            <div class="team-inner">
                                <!--AQUÍ SE DEBE TOMAR EL NOMBRE DE LAS NIÑERAS-->
                                <p class="team-inner-header"><h3><font color="#727272"/>Viridiana Román</h3></p>
                                <br>
                                <p class="team-inner-header"><h4><font color="#727272"/>27 años</h4></p>
                                <p class="team-inner-header"><h4><font color="#727272"/>1230 horas en servicio</h4></p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                        <div class="member-thumb">
                                <img id="borim" src="img/n3_1.jpg" class="img-responsive" alt="member 3" />
                                <!--<div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>-->
                            </div>
                            <div class="team-inner">
                            <!--AQUÍ SE DEBE TOMAR EL NOMBRE DE LAS NIÑERAS-->
                                <p class="team-inner-header"><h3><font color="#727272"/>Karla Bosques</h3></p>
                                <br>
                                <p class="team-inner-header"><h4><font color="#727272"/>25 años</h4></p>
                                <p class="team-inner-header"><h4><font color="#727272"/>420 horas en servicio</h4></p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="text-center">
                        <div class="member-thumb">
                                <img id="borim" src="img/n4_1.jpg" class="img-responsive" alt="member 4" />
                                <!--<div class="thumb-overlay">
                                    <a href="#"><span class="social-icon-fb"></span></a>
                                    <a href="#"><span class="social-icon-twitter"></span></a>
                                    <a href="#"><span class="social-icon-linkedin"></span></a>
                                </div>-->
                            </div>
                            <div class="team-inner">
                            <!--AQUÍ SE DEBE TOMAR EL NOMBRE DE LAS NIÑERAS-->
                                <p class="team-inner-header"><h3><font color="#727272"/>Mónica Ibarra</h3></p>
                                <br>
                                <p class="team-inner-header"><h4><font color="#727272"/>26 años</h4></p>
                                <p class="team-inner-header"><h4><font color="#727272"/>699 horas en servicio</h4></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="respodiv">
        <img id="respo" src="img/garantia.png" alt="">
    </div>
    <br><br><br>
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
</body>
</html>