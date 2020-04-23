<?php 
$section="register";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mi NuNú | Pide tu Servicio</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>  
    
    
 
    <?php include ('analytics.php') ?>
  </head>
  <style>
    .resumen-right{
        text-align: center;
        margin-left: 300px !important;
    }
  </style>
  <body>
  	<?php include ('header.php') ?>

  	
    <div class="container-principal-register">
    
															<!-- pruebas -->    
<div class='wizard-progress wizard-progress-4'>
	<div class='container-menu-register'>
		<div class='row-register'>
			<div style="width:100%;">
				<div class='elemento-menu-register'>
					<span class='icon-user-outline'></span>
					Datos Generales
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register'>
					<span class='icon-brief'></span>
					Horas y C.P.
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register' >
					<span class='icon-calendar-outline'></span>
					Fecha y Dirección
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
				<div class='elemento-menu-register' style="font-weight: bold;font-size: initial;">
					<span class='icon-happy-face'></span>
					Pago
					<img class="progress-arrow" src="img/progress-arrow.png" alt="Void.54b2f337" />
				</div>
			</div>
		</div>
	</div>
</div>															
															
															
															
															<!-- Terminan pruebas -->    
    		<div class="espacio"></div>
    								

    <!--
	<div class="mapa-left">    
        <form action="testCobro.php" class="uk-form uk-form-horizontal register-form" method="post" id="pay" name="pay" >
        
            								<!-- Datos recaudados por POST--><!--
    		<div hidden="hidden">
	                <input type="text" name="first_name"  value="<?php /*echo $_POST[name]; ?>">
	                <input type="text" name="last_name"  value="<?php echo $_POST[lastName]; ?>">
	                <input type="text" name="email"  value="<?php echo $_POST[email]; ?>">
	                <input type="text" name="phone"  value="<?php echo $_POST[phone]; ?>">
	                <input type="text" name="pass"  value="<?php echo $_POST[pass]; ?>">
	                <input type="text" name="pass2"  value="<?php echo $_POST[pass2]; ?>">
	                
	                <input type="text" id="frecuencia" name="frecuencia" value="<?php echo $_POST[frecuencia]; ?>">
	                <input type="text" id="horas" name="horas" value="<?php echo $_POST[horas]; ?>">
	                <input type="text" name="zip_code" value="<?php echo $_POST[cp]; ?>">
	                
	                <input type="text" name="amount"  value="<?php echo $_POST[total]; ?>">
	                <input type="text" name="fechaInput" id="fechaInput" value="<?php echo $_POST[fechaInput]; ?>">
	                <input type="text" name="horaIni" id="horaIni" value="<?php echo $_POST[horaIni]; ?>">
	                
	
	                <input type="text" name="street_name"  value="<?php echo $_POST[direccion]; ?>">
	                <input type="text" name="street_number" value="<?php echo $_POST[num_exterior]; ?>">
	                <input type="text" name="num_interior" value="<?php echo $_POST[num_interior]; ?>">
	                <input type="text" name="entidadf" value="<?php echo $_POST[entidadf]; ?>">
	                <input type="text" name="ciudad" value="<?php echo $_POST[ciudad]; ?>">
	                <input type="text" name="colonia" value="<?php echo $_POST[colonia]; ?>">
	                <input type="text" name="delegacion" value="<?php echo $_POST[delegacion]; ?>">
	                <input type="text" name="extras" value="<?php echo $_POST[extras]; ?>">
	                                
	                <input type="text" name="lat" id="lat"  value="<?php echo $_POST[lat]; ?>">
	                <input type="text" name="lng" id="lng"  value="<?php echo $_POST[lng]; ?>">
					
					
                </div>
                			<!-- Que día y hora -->           
            <fieldset data-uk-margin>
                <legend>Reservar servicio</legend>
                
                <div class="uk-form-row">                
                      <div class="contenedor-horas">
                    		<label style="float:left;">Nombre en tarjeta</label>
                    		<div id="contenedor-nombreTarjeta">                 				
              					<input type="text" id="cardholderName"  data-checkout="cardholderName"  placeholder="Ingresa el nombre en tarjeta"  required="required" > 
							</div>                    		                    		                    
                    </div>
                </div>
                
                <div class="uk-form-row">                
                      <div class="contenedor-horas">
                    		<label style="float:left;">Número en tarjeta</label>
                    		<div id="contenedor-numeroTarjeta">                    				
              					<input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="Inserte el número de su tarjeta" required pattern="^[0-9]{16}$" title="El número de tarjeta debe contener 16 dígitos" >
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                <div class="uk-form-row">                
                      <div class="contenedor-horas izquierda">
                    		<label style="float:left;">Mes de expiración</label>
                    		<div id="contenedor-mesExp">                    				              					
              					<select id="cardExpirationMonth" data-checkout="cardExpirationMonth" required>              						
              						<option selected value="01">01</option>
              						<option value="02">02</option>
              						<option value="03">03</option>
              						<option value="04">04</option>
              						<option value="05">05</option>
              						<option value="06">06</option>
              						<option value="07">07</option>
              						<option value="08">08</option>
              						<option value="09">09</option>
              						<option value="10">10</option>
              						<option value="11">11</option>
              						<option value="12">12</option>
              					</select>
                    		</div>                    		                    		                    
                    </div>
                    
                     <div class="contenedor-horas derecha">
                    		<label style="float:left;">Año de expiración</label>
                    		<div id="contenedor-anoExp">                    				              					
              					<select id="cardExpirationYear" data-checkout="cardExpirationYear" required>              						
              						<option selected value="2016">2016</option>
              						<option value="2017">2017</option>
              						<option value="2018">2018</option>
              						<option value="2019">2019</option>
              						<option value="2020">2020</option>
              						<option value="2021">2021</option>
              						<option value="2022">2022</option>
              						<option value="2023">2023</option>
              						<option value="2024">2024</option>
              						<option value="2025">2025</option>
              					</select>
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">                
                      <div class="contenedor-horas">
                    		<label style="float:left;">CVC</label>
                    		<div id="contenedor-cvc">                    				
              					<input type="text" id="securityCode" data-checkout="securityCode" placeholder="Número de seguridad de tu tarjeta" required pattern="[0-9]{3}">
                    		</div>                    		                    		                    
                    </div>
                </div>
                
                <div class="uk-form-row">                
                      <div class="contenedor-horas">
                    		<label style="float:left;">Número de documento</label>
                    		<div id="contenedor-ndocumento">                    				
              					<input type="text" id="docNumber" data-checkout="docNumber" placeholder="Número de documento" required pattern="[0-9]{8}">
                    		</div>                    		                    		                    
                    </div>
                </div>
                

                
                <div class="uk-form-row">
                    <input class="uk-button boton-lila" type="submit" value="Reservar con $<?php echo $_POST["total"]; */?>">
                </div>
            </fieldset>

        </form>
        -->
        <div class="espacio"></div>
     </div>
     
     													<!-- RESUMEN -->
     													
     <div class="resumen-right">     		
			<form class="uk-form uk-form-horizontal register-form" style="">
				 <fieldset data-uk-margin>
                <legend>Resumen</legend>
                
                <div class="uk-form-row">                
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                            <label class="izquierda">Horas:</label>
                    		<label class="derecha" id="horas"><?php echo $_POST['horas']; ?></label>                     		                    		                    
                    </div>
                </div>
                                                               
                <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Fecha:</label>
                    		<label class="derecha" id="fecha"><?php echo $_POST['fechaInput']; ?></label>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Hora Inicio:</label>
                    		<label class="derecha" id="HoraInicio"><?php echo $_POST['horaIni']; ?></label>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Frecuencia:</label>
                    		<label class="derecha" id="frecuencia"><?php echo $_POST['frecuencia'];  ?></label>                    		                 		                    		                    
                    </div>
                </div>
                
                <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<strong><label class="izquierda">Subtotal:</label></strong>                    		
                    		<strong><label class="derecha fucsia" id="subtotal"><?php echo "$".$_POST['total']; ?></label></strong>                    		                 		                    		                    
                    </div>
                </div>
                
                 <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<strong><label class="izquierda">Total:</label></strong>
                    		<strong><label class="derecha fucsia" id="total"><?php echo "$".$_POST['total']; ?></label></strong>                    		                 		                    		                    
                    </div>
                </div>   

</div>                                            
            </fieldset>
            </form>
            
            <?php 
$total = $_POST['total'];
switch($total) {
									case 170:
										$total= "3 horas";
										break;
									case 230:
										$total= "3 horas";
										break;
									case 270:
										$total= "4 horas";
										break;
									case 330:
										$total= "4 horas y media";
										break;
									case 370:
										$total= "5 horas";
										break;
									case 430:
										$total= "5 horas y media";
										break;
									case 470:
										$total= "6 horas";
										break;	
                                }				
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" value="<?php echo "$".$_POST['total']; ?>">
<table>
<tr><td><input type="hidden" name="on0" value="Ya Puedes Pagar Tu NuNú con PayPal">Ya Puedes Pagar Tu NuNú con PayPal</td></tr><tr><td><select name="os0">

	
	<option value="<?php echo $total; ?>"><?php echo $total; ?> <?php echo "$".$_POST['total']; ?> MXN </option>
	
</select> </td></tr>
</table>
<br><br>
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
            <!--paypalboton
            
-->
			    
    
    </div> 
        <div class="espacio"></div>


        <div class="clear"></div>
    </div> 
    <br><br><br>
    <?php include ('footer.php') ?>
    <?php require_once("side-nav.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/uikit.min.js"></script>
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    
    
    <script type="text/javascript">
    Mercadopago.setPublishableKey("TEST-29e7750b-baee-4d95-a01f-32d378400a8d");

function addEvent(el, eventName, handler){
    if (el.addEventListener) {
           el.addEventListener(eventName, handler);
    } else {
        el.attachEvent('on' + eventName, function(){
          handler.call(el);
        });
    }
};

function getBin() {
    var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
    return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
};

function guessingPaymentMethod(event) {
    var bin = getBin();

    if (event.type == "keyup") {
        if (bin.length >= 6) {
            Mercadopago.getPaymentMethod({
                "bin": bin
            }, setPaymentMethodInfo);
        }
    } else {
        setTimeout(function() {
            if (bin.length >= 6) {
                Mercadopago.getPaymentMethod({
                    "bin": bin
                }, setPaymentMethodInfo);
            }
        }, 100);
    }
};

function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        // do somethings ex: show logo of the payment method
        var form = document.querySelector('#pay');

        if (document.querySelector("input[name=paymentMethodId]") == null) {
            var paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('name', "paymentMethodId");
            paymentMethod.setAttribute('type', "hidden");
            paymentMethod.setAttribute('value', response[0].id);

            form.appendChild(paymentMethod);
        } else {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    }
};

addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'change', guessingPaymentMethod);


doSubmit = false;
addEvent(document.querySelector('#pay'),'submit',doPay);
function doPay(event){
    event.preventDefault();
    if(!doSubmit){
        var $form = document.querySelector('#pay');
        
        Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

        return false;
    }
};


function sdkResponseHandler(status, response) {
	console.log(status);
	console.log(response);
    if (status != 200 && status != 201) {
        alert("verify filled data");
    }else{
       
        var form = document.querySelector('#pay');

        var card = document.createElement('input');
        card.setAttribute('name',"token");
        card.setAttribute('type',"hidden");
        card.setAttribute('value',response.id); 
        console.log(response.id);       
        form.appendChild(card);
        doSubmit=true;
        form.submit();
    }
};
    
    </script>    


		
     
    
    
  </body>
</html>