<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
        	<li>
            	<img src="img/logo-minunu.png" class="brandLogo">
            </li>
            <li <?php if($section == "home")echo "id=current" ?>>
                <a href="/">Inicio</a>
            </li>
            <li <?php if($section == "como-funcionamos")echo "id=current" ?>>
                <a href="como-funcionamos">¿Cómo funciona?</a>
            </li>
            <li <?php if($section == "precios")echo "id=current" ?>>
                <a href="precios.php">Precios</a>
            </li>
            <li <?php if($section == "preguntas-frecuentes")echo "id=current" ?>>
                <a href="preguntas-frecuentes">Preguntas frecuentes</a>
            </li>
            <!--
            <?php if(isset($_SESSION['idUser'])){ ?>
                <li>
                    <a href="usuario/<?php echo $_SESSION['idUser'] ?>">Mi perfil</a>
                </li>
                <li>
                    <a href="cerrar-sesion">Cerrar sesión</a>
                </li>
            <?php }
            /*else{ ?>
                <li>
                    <a href="iniciar-sesion"><strong>Iniciar sesión</strong></a>
                </li>
            <?php } */?>-->
        </ul>
    </div>
</div>