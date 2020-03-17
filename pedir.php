<pedir>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form1.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/main.css" rel="stylesheet"/>
<div class="uk-width-1-1">
<input type="button" class="boton-arcoiris" name="btnpide" value="Pide tu NuNú" onclick="document.getElementById('id01').style.display='block'">
<!--<a href="#" class="boton-arcoiris formularioh">Pide tu <strong>NuNú</strong></a>-->
</div>
<div id="id01" class="w3-modal">
<br><br><br>
<div class="w3-modal-content">
    <div class="w3-container">
    <!--<span id="close" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">X</span>-->
        <div class="titform">
            <h3 id="tf"><b>¡Déjanos tus datos!</b></h3>
            <p id="pf">Pronto nos pondremos en contacto contigo para darte más información sobre MiNuNú.</p>
        </div>
        <div class="form1">
            <form name="miformulario" id="miformulario" method="post">
                <div class="ndiv">
                    <input type="text" name="nom" id="name1" autocomplete="off"  placeholder="Nombre" required>
                </div>
                <div class="ediv">
                    <input type="text" name="mail1" id="email1" autocomplete="off"  placeholder="Correo electronico" required>
                </div>
                <div class="buttons">
                    <button class="button" type="submit" id="btEnviar" action="enviarEmail.php">Enviar</button>
                    <button id="btc" class="button" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-bottom">Cancelar</button>
                </div>
            </form>
        </div>
    </div>            
</div>
</div>
<!--TERMINA CODIGO DEL BOTON Y FORM-->
</pedir>