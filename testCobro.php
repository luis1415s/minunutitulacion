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
$amount= (double)$amount; 

$mp = new MP('TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318');

			/*  Datos para el registrar en el pago */
	$payment_data = array(
		"transaction_amount" => $amount,
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

		/* Datos para registrar al cliente en MercadoPago */
	
	$street_number= (double)$street_number;
	$customer_data= array(
	"email" => $email,
	"first_name" => $name,
	"last_name" => $last_name,
	"phone" => array(
		"number"=> $phone
		),
	"address"=> array(
		"zip_code"=> $zip_code,
		"street_name"=> $street_name,
		"street_number"=> $street_number,
	)
);

		/* Se registra el pago */
$payment = $mp->post("/v1/payments", $payment_data);
		/* Se registra el usuario */
$customer = $mp->post("/v1/customers", $customer_data);


						/* Compra exitosa */
if($payment['response']['status']=="approved" && $payment['response']['status_detail']=="accredited") {

	//echo"Correo: ".$email;
	$emailCliente = array (
	    "email" => $email
	);
	
	$saved_customer = $mp->get ("/v1/customers/search", $emailCliente);
	$customer_id = $saved_customer["response"]["results"][0]["id"];
	
	//echo "Id del cliente: ".$customer_id;	
	//echo "Token de compra: ".$token;
	
	$card = $mp->post ("/v1/customers/".$customer_id."/cards", array("token" => $token));
	/*echo "<pre>";
	print_r ($card);*/
	
	
	include "back/actionsbd.php";	
	insertClient($customer_id);
	
	
		
		echo".";
		
		echo"<script type='text/javascript'>
			swal({
			  title: '¡Listo, se acreditó tu pago!',
			  text: 'En tu resumen verás el cargo de $$amount pesos como WWW.MERCADOPAGO.COM',
			  type: 'success',
			  showCancelButton: false,
			  confirmButtonColor: '#3cb371',
			  confirmButtonText: 'Ok',
			  closeOnConfirm: false
			},
			function(){
			  window.location='index.php';
			});
		</script>";
		
		
	
		
		


}else {
	
				/* Pendiente para procesar el pago*/
	if($payment['response']['status']=="in_process") {
		if($payment['response']['status_detail']=="pending_contingency") {
			echo".";
			echo"<script type='text/javascript'>
				swal({
				  title: 'Estamos procesando el pago.',
				  text: 'En menos de una hora te enviaremos por e-mail el resultado.',
				  type: 'warning',
				  showCancelButton: false,
				  confirmButtonColor: '#3cb371',
				  confirmButtonText: 'Ok',
				  closeOnConfirm: false
				},
				function(){
				  window.location='index.php';
				});
			</script>";
		}elseif($payment['response']['status_detail']=="pending_review_manual") {
			echo ".";
				echo"<script type='text/javascript'>
					swal({
					  title: 'Estamos procesando el pago.',
					  text: 'En menos de 2 días hábiles te diremos por e-mail si se acreditó o si necesitamos más información.',
					  type: 'warning',
					  showCancelButton: false,
					  confirmButtonColor: '#3cb371',
					  confirmButtonText: 'Ok',
					  closeOnConfirm: false
					},
					function(){
					  window.location='index.php';
					});
				</script>";
		}	
	}
	
	
	if($payment['response']['status']=="rejected") {
		switch($payment['response']['status_detail']) {
			case 'cc_rejected_bad_filled_card_number':
				echo "Revisa el número de tarjeta.";
				break;
			case 'cc_rejected_bad_filled_date':
				echo "Revisa la fecha de vencimiento.";
				break;
			case 'cc_rejected_bad_filled_other':
				echo "Revisa los datos.";
				break;
		}
	}
	


}//else general


?>
<!--<script type="text/javascript">
swal("Good job!", "You clicked the button!", "success");
</script>-->
