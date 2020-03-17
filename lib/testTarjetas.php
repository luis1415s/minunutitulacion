<?php
require_once ('lib/mercadopago.php');

$mp = new MP ("TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318");

$filters = array ("email" => "test1@test.com");

$cards = $mp->get ("/v1/customers/216059740-EXTQf3NCOSLbNL/cards");
/*echo "Tarjeta";
echo "<pre>";
print_r ($customer);*/
?>
<form id="pay" name="pay" action="testPago.php" method="POST">
	<li>
		<label>Payment Method:</label>
		<select id="cardId" name="cardId" data-checkout='cardId'>
		<?php foreach ($cards["response"] as $card) { ?>
			<option value="<?php echo $card['id']; ?>" 
				first_six_digits="<?php echo $card['first_six_digits']; ?>" 
				security_code_length="<?php echo $card['security_code']['length']; ?>">
					<?php echo $card["payment_method"]["name"]; ?> con terminacion <?php echo $card["last_four_digits"]; ?>
			</option>
		<?php } ?>
		</select>
	</li>
	<li id="cvv">
		<label for="cvv">Security code:</label> 
		<input type="text"  id="cvv" data-checkout="securityCode" placeholder="123" />
	</li>

	<input type="submit"  value="Testear">
	
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

	//addEvent(document.querySelector('input[data-checkout="cardNumber"]'), 'keyup', guessingPaymentMethod);
	addEvent(document.querySelector('input[data-checkout="cardId"]'), 'change');	
	
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
	
	
	
	function cardsHandler(){
     var card = document.querySelector('select[data-checkout="cardId"]');

     // check if the security code (ex: Tarshop) is required
     if (card[card.options.selectedIndex].getAttribute('security_code_length')==0){
          document.querySelector("#cvv").style.display = "none";
     }else if(document.querySelector("#cvv").style.display!="block") {
          document.querySelector("#cvv").style.display = "block";
     }
}

addEvent(document.querySelector('select[data-checkout="cardId"]'),'change',cardsHandler);


</script>


