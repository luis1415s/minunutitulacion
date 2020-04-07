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
    <title>Mi NuNú | Registro</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/uikit.min.css" />
      
    <link href="css/main.css" rel="stylesheet"/>  
    
    
 
    <?php include ('analytics.php') ?>
  </head>
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
					Crear Cuenta
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
    								

    
	<div class="mapa-left">    
        <form action="testCobro.php" class="uk-form uk-form-horizontal register-form" method="post" id="pay" name="pay" >
        
            								<!-- Datos recaudados por POST-->
    		<div hidden="hidden">
	                <input type="text" name="first_name"  value="<?php echo $_POST[name]; ?>">
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
                    <input class="uk-button boton-lila" type="submit" value="Reservar con $<?php echo $_POST["total"]; ?>">
                </div>
            </fieldset>

        </form>
        <div class="espacio"></div>
     </div>
     
     													<!-- RESUMEN -->
     													
     <div class="resumen-right">     		
			<form class="uk-form uk-form-horizontal register-form" style="float:left;width:50%;">
				 <fieldset data-uk-margin>
                <legend>Resumen</legend>
                
                <div class="uk-form-row">                
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Horas:</label>
                    		<label class="derecha"><?php echo $_POST['horas']; ?></label>                  		                    		                    
                    </div>
                </div>
                                                               
                <div class="uk-form-row">
                      <div style=" border-bottom: grey;border-bottom-width: thin;border-bottom-style: solid;height: 40px;">
                    		<label class="izquierda">Fecha:</label>
                    		<label class="derecha" id="fecha"><?php echo $_POST['fechaInput']; ; ?></label>                    		                 		                    		                    
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
                
                                                              
            </fieldset>
			</form>     
     </div>
                
        <div class="espacio"></div>


        <div class="clear"></div>
    </div> 
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