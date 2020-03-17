<?php
	$dsn = "mysql:host=yankuserver.com;port=3306;dbname=yankuser_minunu";
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
				}

	
			
?>