<?php 
$section="login";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>Mi NuNú | Nueva Visita</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>      
    <?php include ('analytics.php') ?>
  </head>
  <body>
  	<?php include ('header.php') ?>
       
	 <nav class="uk-navbar">
        
        <ul id="main-menu" class="uk-navbar-nav uk-hidden-small">
            <li <?php if($section == "home")echo "id=current" ?>>
                <a href="index.php">Perfil De Usuario</a>
            </li>
            
        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="clear"></div>
    </nav>  
	   
	   
	   
	   
	   
	   
	   <nav class="uk-navbar">
        
        <ul id="main-menu" class="uk-navbar-nav uk-hidden-small">
            <li <?php if($section == "home")echo "id=current" ?>>
                <a href="index.php">Visitas</a>
            </li>
            <li <?php if($section == "como-funcionamos")echo "id=current" ?>>
                <a href="como-funcionamos">Historial</a>
            </li>
            <li <?php if($section == "precios")echo "id=current" ?>>
                <a href="precios">Balance</a>
            </li>
            <li <?php if($section == "step1")echo "id=current" ?>>
                <a href="step1.php">Nueva Visita</a>
            </li>
			<li <?php if($section == "Iniciar Sesión")echo "id=current" ?>>
                <a href="step1">Mi perfil</a>
            </li>

        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="clear"></div>
    </nav>

	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
        
        
       
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
  </body>
</html>