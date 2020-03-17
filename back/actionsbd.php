<?php
	
	 $dsn = "mysql:localhost;port=3306;dbname=yankuser_minunu";
    $DBUser = "yankuser_nunudev";
    $DBPassword = "[f[;=aK7XEvL";
	
	
	function insertClient($customer_id) {				
		global	$dsn, $DBUser, $DBPassword;
        				
				try 
				{
					$query = "INSERT INTO clientes(name, last_name, email, phone, pw, idmp) values (:nombre, :apellido, :email, :telefono, :contra, :idmercado)";
					$conn = new PDO($dsn, $DBUser, $DBPassword);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare($query);

					$tempPass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

					$stmt->bindParam(':nombre', $_POST["first_name"]);
					$stmt->bindParam(':apellido', $_POST["last_name"]);
					$stmt->bindParam(':email', $_POST["email"]);
					$stmt->bindParam(':telefono', $_POST["phone"]);
					$stmt->bindParam(':contra', $tempPass);
					$stmt->bindParam(':idmercado', $customer_id);

					$stmt->execute();
					$id_cliente= $conn->lastInsertId();
							
						
						if($stmt == true)
						{	
						
							echo "Datos insertados correctamente 1";
								$conn=null;
								insertAddress($id_cliente, $dsn, $DBUser, $DBPassword);
						}
						else{
							
							echo "Error :(";
							
						}
						}
				catch (PDOException $e) { 
					//var_dump($e->getMessage());
					echo "<pre>";
					echo "Error en: ".$e;
					if($stmt->errorCode() == 23000)
					{
						return false;
					}
				}					
	}
	
	function insertAddress($id_cliente, $dsn, $DBUser, $DBPassword) {
		try{
					/* Insercción de datos de las direcciones */
						$query2 = "INSERT INTO direcciones(iduser, address, number, inside_number, locality, sublocality, city, deleg, extra, zip, lat, lng) values (:iduser, :direccion, :numero, :numerointerior, :entidadf, :colonia, :ciudad, :delegacion, :extra, :cp, :lat, :lng)";
						$conn2 = new PDO($dsn, $DBUser, $DBPassword);
						$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt2 = $conn2->prepare($query2);							
							if($_POST["num_interior"]=="" || $_POST["num_interior"]==null) {
								$numinterior= "No aplica";									
							}else {
								$numinterior=$_POST["num_interior"];
							}
							if($_POST["extras"]=="" || $_POST["extras"]==null) {
								$extras="No hay información extra";
							}else {
								$extras=$_POST["extras"];
							}
						$stmt2->bindParam(':iduser', $id_cliente);
						$stmt2->bindParam(':direccion', $_POST["street_name"]);
						$stmt2->bindParam(':numero', $_POST["street_number"]);
						$stmt2->bindParam(':numerointerior', $numinterior);						
						$stmt2->bindParam(':entidadf', $_POST["entidadf"]);		
						$stmt2->bindParam(':colonia', $_POST["colonia"]);		
						$stmt2->bindParam(':ciudad', $_POST["ciudad"]);		
						$stmt2->bindParam(':delegacion', $_POST["delegacion"]);		
						$stmt2->bindParam(':extra', $extras);		
						$stmt2->bindParam(':cp', $_POST["zip_code"]);		
						$stmt2->bindParam(':lat', $_POST["lat"]);		
						$stmt2->bindParam(':lng', $_POST["lng"]);		
					
						$stmt2->execute();
						
						if($stmt2 == true)
						{	
						
							echo "Datos insertados correctamente 2";
							$conn2=null;
							insertService($id_cliente, $dsn, $DBUser, $DBPassword);
						}
						else{
							
							echo "Error2 :(";
							
						}
				}catch (PDOException $e) { 
					//var_dump($e->getMessage());
					echo "<pre>";
					echo "Error en: ".$e;
					if($stmt->errorCode() == 23000)
					{
						return false;
					}
				}
	}
	
	function insertService($id_cliente, $dsn, $DBUser, $DBPassword) {
		
		try{
						/* Insercción de datos de los servicios */
						$query3 = "INSERT INTO servicios(iduser, name_user, frec, hours, amount, date_service, time_service, address, status, type) values (:iduser, :name_user, :frec, :hours, :amount, :date_service, :time_service, :address, :status, :type)";
						$conn3 = new PDO($dsn, $DBUser, $DBPassword);
						$conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt3 = $conn3->prepare($query3);
						$nombreCliente= $_POST["first_name"]." ".$_POST["last_name"];							
							/* Tipo de servicio */
						$typeService="Reservación";
						
							/* Estado del servicio/registro */
						$status="Cobrado";
						
						$stmt3->bindParam(':iduser', $id_cliente);
						$stmt3->bindParam(':name_user', $nombreCliente);
						$stmt3->bindParam(':frec', $_POST["frecuencia"]);
						$stmt3->bindParam(':hours', $_POST["horas"]);						
						$stmt3->bindParam(':amount', $_POST["amount"]);		
						$stmt3->bindParam(':date_service', $_POST["fechaInput"]);		
						$stmt3->bindParam(':time_service', $_POST["horaIni"]);		
						$stmt3->bindParam(':address', $_POST["street_name"]);		
						$stmt3->bindParam(':status', $status);		
						$stmt3->bindParam(':type', $typeService);										
					
						$stmt3->execute();
						
						if($stmt3 == true)
						{														
							$conn3=null;
							
						}
						else{
							
							echo "Error2 :(";
							
						}
				}catch (PDOException $e) { 
					//var_dump($e->getMessage());
					echo "<pre>";
					echo "Error en: ".$e;
					if($stmt->errorCode() == 23000)
					{
						return false;
					}
				}
	
	}
	


	/*function updateUser($idUser)
	{
		global	$dsn, $DBUser, $DBPassword;
        
		//var_dump($_POST);
		if(isset($_POST["idUser"], $_POST["email"], $_POST["name"]))
		{
			$query = "UPDATE user SET email = :email, name =:name WHERE idUser = :idUser";
			try 
			{
				$conn = new PDO($dsn, $DBUser, $DBPassword);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare($query);
	
				$stmt->bindParam(':email', $_POST["email"]);
				$stmt->bindParam(':name', $_POST["name"]);
				$stmt->bindParam(':idUser', $idUser);
				$stmt->execute();
	
				if($stmt == true)
				{
					$redirect = "Location: http://yanku-server.com/veramonte-form/info.php?result=ok&message=".rawurlencode("La actualizaci&oacute;n ha sido correcta");
					header($redirect);
				}
				else{
					$redirect = "Location: http://yanku-server.com/veramonte-form/info.php?result=error&message=".rawurlencode("La actualizaci&oacute;n ha sido incorrecta");
					header($redirect);
				}
			}catch (PDOException $e) { 
				var_dump($e->getMessage());
				if($stmt->errorCode() == 23000)
				{
					$redirect = "Location: http://yanku-server.com/veramonte-form/info.php?result=error&message=".rawurlencode("La actualizaci&oacute;n ha sido incorrecta");
					header($redirect);
				}
			}
		}
		else{
			$redirect = "Location: http://yanku-server.com/veramonte-form/info.php?result=error&message=".rawurlencode("Los datos no son correctos");
			header($redirect);
		}
	}*/
?>