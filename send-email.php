<?php
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
$hora= date('g:i:s A');
$fecha= date('d/m/Y');
if(isset($_GET['actionMethod'])){
	switch($_GET['actionMethod'])
	{
		case 'solicitar-llamada':
			  $email= "luiscarlos_vocacional5@outlook.es";
			  $remite="<contacto@minunu.mx>";
			  if(isset($_POST["telephone"],$_POST["code"])){
				  if($_POST["telephone"] != '' && $_POST["code"] != '' ){
					  $body .= "¡Una persona ha dejado sus datos en el sitio para pedir que le llames! \n\n";				  
					  $body .= "* Hora: " . $hora . " \n\n";
					  $body .= "* Fecha: " . $fecha . "\n\n";				  
					  $body .= "* Télefono: " . $_POST["telephone"] . " \n\n";         
					  $body .= "* Codigo postal: " . $_POST["code"] . "\n\n"; 
					  if(mail($email, "Solicitud de llamada", $body, "FROM: MiNuNú.MX ".$remite)){
							echo 3;
					  }else{
							echo 4;		
					  }					  
				  }
				  else{
					  echo 1;
				  }				  
			  }
			  else{
				  echo 0;
			  }			
		break;
		case 'primer_visita':
			  $email= "sofia@minunu.mx";
			  //$email= "ricardo@yanku.mx";
			  $remite="<contacto@minunu.mx>";
			  if(isset($_POST["nombre"],$_POST["email"],$_POST["telefono"])){
				  if($_POST["nombre"] != '' && $_POST["email"] != '' && $_POST["telefono"] != '' ){
					  $body .= "¡Una persona ha dejado sus datos en el sitio para solicitar o agendar la  primera visita! \n\n";				  
					  $body .= "* Hora: " . $hora . " \n\n";
					  $body .= "* Fecha: " . $fecha . "\n\n";				  
					  $body .= "* Nombre completo: " . $_POST["nombre"] . " \n\n";         
					  $body .= "* E-mail: " . $_POST["email"] . "\n\n"; 
					  $body .= "* Télefono: " . $_POST["telefono"] . "\n\n"; 					  
					  
					  
					  if(mail($email, "Solicitud de primer visita", $body, "FROM: MiNuNú.MX ".$remite)){
							echo 3;
					  }else{
							echo 4;		
					  }					  
				  }
				  else{
					  echo 1;
				  }				  
			  }
			  else{
				  echo 0;
			  }	
		break;
		case 'ser_nunu':
			  $email= "sofia@minunu.mx";
			  //$email= "ricardo@yanku.mx";
			  $remite="<contacto@minunu.mx>";
			  if(isset($_POST["nombre_nunu"],$_POST["email_nunu"],$_POST["telefono_nunu"])){
				  if($_POST["nombre_nunu"] != '' && $_POST["email_nunu"] != '' && $_POST["telefono_nunu"] != '' ){
					  $body .= "¡Una persona ha dejado sus datos en el sitio por que desea ser parte de las nunús! \n\n";				  
					  $body .= "* Hora: " . $hora . " \n\n";
					  $body .= "* Fecha: " . $fecha . "\n\n";				  
					  $body .= "* Nombre completo: " . $_POST["nombre_nunu"] . " \n\n";         
					  $body .= "* E-mail: " . $_POST["email_nunu"] . "\n\n"; 
					  $body .= "* Télefono: " . $_POST["telefono_nunu"] . "\n\n"; 					  
					  
					  
					  if(mail($email, "Solicitud de quiero ser una nunú", $body, "FROM: MiNuNú.MX ".$remite)){
							echo 3;
					  }else{
							echo 4;		
					  }					  
				  }
				  else{
					  echo 1;
				  }				  
			  }
			  else{
				  echo 0;
			  }	
		break;		
	}
}
	/*$dsn = "mysql:host=yankuserver.com;port=3306;dbname=yankuser_minunu";
    $DBUser = "yankuser_nunudev";
    $DBPassword = "[f[;=aK7XEvL";

				try 
				{
					date_default_timezone_set('UTC');
					date_default_timezone_set("America/Mexico_City");
					$hora= date('g:i:s A');
					$fecha= date('d/m/Y');
					$query = "INSERT INTO registros(nombre, correo, hora, fecha) values (:nombre, :correo, :hora, :fecha)";
					$conn = new PDO($dsn, $DBUser, $DBPassword);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare($query);				

					$stmt->bindParam(':nombre', $_POST["nom"]);
					$stmt->bindParam(':correo', $_POST["maill"]);

					$stmt->bindParam(':hora', $hora);
					$stmt->bindParam(':fecha', $fecha);
					// $stmt->bindParam(':telefono', $_POST["phone"]);
					// $stmt->bindParam(':auto', $_POST["car"]);				
					
					$stmt->execute();

					if($stmt == true)
					{


					  $email= "sofia@minunu.mx";
					  $remite="<contacto@minunu.mx>";
					  
					  $body .= "¡Una persona ha dejado sus datos en el sitio! \n\n";				  
					  $body .= "* Hora: " . $hora . " \n\n";
					  $body .= "* Fecha: " . $fecha . "\n\n";				  
					  $body .= "* Nombre: " . $_POST["nom"] . " \n\n";         
					  $body .= "* Correo: " . $_POST["maill"] . "\n\n"; 
					  
					  
					  if(mail($email, "Nuevo registro en la página MiNuNú", $body, "FROM: MiNuNú.MX ".$remite)){
					  		echo "1";
							return true;
					  }		


					}
					else{
						echo "2";
						return false;
						
					}
				}
				catch (PDOException $e) { 
					var_dump($e->getMessage());
					echo "Error en: ".$e;
					if($stmt->errorCode() == 23000)
					{
						return false;
					}
				}*/
?>