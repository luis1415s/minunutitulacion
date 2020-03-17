<?php
require_once ('lib/mercadopago.php');

$mp = new MP('3905373072641820', 'FEg1zpYalTwcnI78rN2gfEgFhyhGdFEJ');
$mp->sandbox_mode(TRUE);

$preapproval_data = array(
	"payer_email" => "sofia@minunu.mx",
	"back_url" => "http://yankuserver.com/minunu/index.php",
	"reason" => "Prueba de pagos",
	"external_reference" => "NuNu-Semanal",
	"auto_recurring" => array(
		"frequency" => 7,
		"frequency_type" => "days",
		"transaction_amount" => 50,
		"currency_id" => "MXN",
		
		"end_date" => "2016-06-28T14:58:11.778-03:00"
	)
);

$preapproval = $mp->create_preapproval_payment($preapproval_data);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Subscribe</title>
	</head>
	<body>
		<a href="<?php echo $preapproval['response']['sandbox_init_point']; ?>">Subscribe</a>
	</body>
</html>
