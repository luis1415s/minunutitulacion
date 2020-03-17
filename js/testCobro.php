<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<?php
require_once ('lib/mercadopago.php');

$token= $_POST['token'];
$payMethod= $_POST['paymentMethodId'];
$email= $_POST['email'];
$name= $_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$street_name=$_POST['street_name'];
$street_number=$_POST['street_number'];
$zip_code=$_POST['zip_code'];
$amount=$_POST['amount'];
 

$mp = new MP('TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318');

$payment_data = array(
	"transaction_amount" => 120,
	"token" => $token,
	"description" => "Pago por registro MiNuNu",
	"installments" => 1,
	"payment_method_id" => $payMethod,
	"payer" => array (
		"email" => $email,
				
	),
		"additional_info" => array (
			"payer"=> array (
				"first_name"=> $name,
				"last_name"=> $last_name,
				"phone" =>array(
					"number"=> $phone
				),
				"address"=>array(
					"street_name"=> $street_name,
					"street_number"=> $street_number,
					"zip_code"=> $zip_code
				)				
			)
				
		)		
);


$payment = $mp->post("/v1/payments", $payment_data);
echo "<pre>";
print_r($payment);

		//Aquí se puede checar el status si fue aprobado o no 
$statuss= $payment['response']['status'];
$statusd= $payment['response']['status_detail'];
echo "---------- Status: ".$statuss.",".$statusd."- Token:".$token;


?>
<!--<script type="text/javascript">
swal("Good job!", "You clicked the button!", "success");
</script>-->
