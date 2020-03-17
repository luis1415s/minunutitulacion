<?php

require_once ('lib/mercadopago.php');

$mp = new MP ("TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318");

$token=$_POST['token'];

echo $token;

$payment_data = array(
	"transaction_amount" => 100,
	"token" => $token,
	"description" => "Test pago autoguardado",
	"installments" => 1,
	"payer" => array (
		"id" => "217978111-jqjvA7BKNoIJ7D"
	)
);

$payment = $mp->post("/v1/payments", $payment_data);
echo "<pre>";
print_r ($payment);

 ?>
