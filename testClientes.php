<?php

require_once ('lib/mercadopago.php');

$mp = new MP ("TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318");

			//Nuevo Cliente
/*$customer_data= array(
	"email" => "walter@yanku.mx",
	"first_name" => "Walter",
	"last_name" => "Torres",
	"phone" => array(
		"number"=>"555658545"
		),
	"address"=> array(
		"zip_code"=> "03900",
		"street_name"=> "Cerrada Miguel Noreña",
		"street_number"=> 18,
	)
);*/

/*$customer_data = array(
	"email"=> "walter2@yanku.mx"
);

$customer = $mp->post ("/v1/customers", $customer_data);*/

				
				
				
				//Buscar por email
/*$filters = array (
    "email" => "test4@test.com"
);

$customer = $mp->get ("/v1/customers/search", $filters);*/


				//Pre aprobados
//$customer= $mp-> get("/preapproval/search");



			//Eliminar

//$customer = $mp-> delete ("/v1/customers/","walter@yanku.mx");


//------------------------------------------------------------------------

/*$email= "test3@test.com";

$customer = array (
    "email" => $email
);

$saved_customer = $mp->get ("/v1/customers/search", $customer);
$customer_id = $saved_customer["response"]["results"][0]["id"];
echo $customer_id;

$card = $mp->post ("/v1/customers/".$customer_id."/cards", array("token" => "94642fbeb6b712686b20c5abc57d4273"));
echo "<pre>";
print_r ($card);*/



				// Buscar tarjetas
//$cards = $mp->get ("/v1/customers/216059740-EXTQf3NCOSLbNL/cards");	




				// Busqueda de todos los clientes
$cards = $mp->get ("/v1/customers/search");	




echo "<pre>";
print_r ($cards);
?>