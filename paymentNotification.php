<?php
require_once "lib/mercadopago.php";

$mp = new MP("TEST-3905373072641820-052318-bd1007997c33913480686e0e3597fd4a__LC_LA__-214309318");

$json_event = file_get_contents('php://input', true);
$event = json_decode($json_event);

if (!isset($event->type, $event->data) || !ctype_digit($event->data->id)) {
	http_response_code(400);
	return;
}

if ($event->type == 'payment'){
    $payment_info = $mp->get('/v1/payments/'.$event->data->id);

    if ($payment_info["status"] == 200) {
    	
    		/* Acción a realizar cuando se recibe un pago */
    				/* Obtención de datos */
    		$Nombre=$payment_info["response"]["additional_info"]["payer"]["first_name"];
    		$Apellido=$payment_info["response"]["additional_info"]["payer"]["last_name"];    		
    		$FechaHora=$payment_info["response"]["date_created"];
    		$info=$payment_info["response"]["description"];
    		$monto=$payment_info["response"]["transaction_amount"];
    		
    		if($Nombre==null || $Nombre=="") {
    			$Nombre=$payment_info["response"]["payer"]["first_name"];
    			$Apellido=$payment_info["response"]["payer"]["last_name"];
    		}
    			
    			$hora= substr($FechaHora,11,-10);
    			$fecha= substr($FechaHora,0,10);
    			    			
    					/* Si un pago fue realizado correctamente */
    		if($payment_info['response']['status']=="approved") {
    					/* Notificación al administrador */
				  $email= "sofia@minunu.mx,laura@minunu.mx";
				  $remite="contacto@minunu.mx";
				  
				  $body .= "¡Se realizó un pago! \n\n";				  
				  $body .= "* Hora: " . $hora . " hrs \n\n";
				  $body .= "* Fecha: " . $fecha . "\n\n";
				  $body .= "* Descripción: " . $info . "\n\n";
				  $body .= "* Monto: $" . $monto . " pesos \n\n";         
				  $body .= "* Nombre: " . $Nombre . "\n\n"; 
				  $body .= "* Apellido: " . $Apellido . "\n\n";
				  
				  if(mail($email, "Notificación de pago MiNuNú", $body, "FROM: ".$remite)){
				  					/* Notificación al cliente */
				  		  $body="";
				  		  $email="";
				  		  $email= $payment_info["response"]["payer"]["email"];
						  $remite="contacto@minunu.mx";
						  
						  $body .= "Gracias ".$Nombre." ".$Apellido." por suscribirte a MiNuNú. \n\n";				  
						  $body .= "En breve te enviaremos más información. \n\n";
						
						  mail($email, "¡Tu pago se realizó correctamente!", $body, "FROM: ".$remite); 
				  }				  						     			
    		}
    		
    		
    						/* Si un pago está en proceso de ser aprobado */
    		if($payment_info['response']['status']=="in_process") {
    						/*  Notificación a los administradores */
    			  $email= "sofia@minunu.mx,laura@minunu.mx";
				  $remite="contacto@minunu.mx";
				  
				  $body .= "Un pago está en proceso de ser aprobado: \n\n";				  
				  $body .= "* Hora: " . $hora . " hrs \n\n";
				  $body .= "* Fecha: " . $fecha . "\n\n";
				  $body .= "* Descripción: " . $info . "\n\n";
				  $body .= "* Monto: " . $monto . "\n\n";         
				  $body .= "* Nombre: " . $Nombre . "\n\n"; 
				  $body .= "* Apellido: " . $Apellido . "\n\n";
				  if(mail($email, "Notificación de pago en proceso MiNuNú", $body, "FROM: ".$remite)){
				  				
				  				/* Notificación al cliente */
				  		  $body="";
				  		  $email="";
				  		  $email= $payment_info["response"]["payer"]["email"];
						  $remite="contacto@minunu.mx";
						  
						  $body .= "Hola, ".$Nombre." ".$Apellido." tu pago está en proceso de ser aprobado. \n\n";				  
						  $body .= "Te mandaremos un email, cuando hayamos procesado el pago. \n\n";
						
						  mail($email, "Tu pago está en proceso.", $body, "FROM: ".$remite); 
				  }
    		}
 
                	
        
        
        http_response_code(200);
        return;
    }
}
?>