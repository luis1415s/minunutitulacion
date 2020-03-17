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
                <!--codigo boton paypal -->
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt=""  src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

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