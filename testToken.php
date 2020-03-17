<form action="testCobro.php" method="post" id="pay" name="pay" >
    <fieldset>
        <ul>
            <li>
                <label for="email">Email</label>
                <input id="email" name="email" value="test_user_19653727@testuser.com" type="email" placeholder="your email"/>
            </li>
            <li>
                <label for="first_name">Nombre:</label>
                <input type="text" id="first_name" name="first_name"  placeholder="Name" value="Walter" />
            </li>
            <li>
                <label for="last_name">Apellidos:</label>
                <input type="text" id="last_name" name="last_name"  placeholder="Last Name" value="Torres" />
            </li>
            <li>
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone"  placeholder="55585654" value="55585654"  />
            </li>
             <li>
                <label for="phone">Direccion:</label>
                <input type="text"  name="street_name"  value="Cerrada Miguel Norena"  />
            </li>
				 <li>
                <label for="phone">numeroCasa:</label>
                <input type="text"  name="street_number"  value="18"  />
            </li>
             <li>
                <label for="phone">CP:</label>
                <input type="text"  name="zip_code"  value="03900"  />
            </li>
            <li>
                <label for="phone">Precio:</label>
                <input type="text"  name="amount"  value="125"  />
            </li>
            <li>
                <label for="cardNumber">Credit card number:</label>
                <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="5474 9254 3267 0366" value="5474 9254 3267 036" />
            </li>
            <li>
                <label for="securityCode">Security code:</label>
                <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" value="123" />
            </li>
            <li>
                <label for="cardExpirationMonth">Expiration month:</label>
                <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12" value="08" />
            </li>
            <li>
                <label for="cardExpirationYear">Expiration year:</label>
                <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" value="2018" />
            </li>
            <li>
                <label for="cardholderName">Card holder name:</label>
                <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" value="APRO" />
            </li>
           
            <li>
                <label for="docNumber">Document number:</label>
                <input type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" value="12345678" />
            </li>
        </ul>
        <input type="submit" value="Pay!" />
    </fieldset>
</form>

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
            paymentMethod.setAttribute('type', "text");
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
        card.setAttribute('type',"text");
        card.setAttribute('value',response.id); 
        console.log(response.id);       
        form.appendChild(card);
        doSubmit=true;
        form.submit();
    }
};
</script>
