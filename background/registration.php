<?php 
	$name = $_GET['name'];
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	$contact_no = $_GET['contact_no'];
	$gender = $_GET['gender'];
	
	require '../include/db_config.php';
	require '../vendor/autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	

	$db = new Database();
	$conn = $db->getConnection();

	$cnt = 0;

	$active_hash = $db->randomString();

	$query = "SELECT email FROM registration where email = '$email'";

	$q = $conn->query($query);
		
	$q->setFetchMode(PDO::FETCH_ASSOC);
		
	while ($r = $q->fetch()) {
		$cnt++;
	}
	if($cnt == 0){

		$email1 = urlencode($email);

		if($cnt == 0){

		

			$message = '<div style="background-color: #f1f1f1; border: 1px solid grey; height: 200px; width: 500px;">
				<h1 style="color: #0f1c41; margin-left: 20px;">Wce Acm Hackathon</h1>
				<h2 style="color: #0f1c41; margin-left: 20px;">For verify your email please the button bellow</h2>
				<a href="http://localhost/acm/background/verify.php?email='.$email1.'&active_hash='.$active_hash.'"><button style="height: 50px; margin-left: 20px;">Verify E-mail</button></a>
			</div>';

			$mail = new PHPMailer(true);                         
			try {
		                                        
				    $mail->Host = 'smtp.gmail.com';  
				    $mail->SMTPAuth = true;                               
				    $mail->Username = 'wceacmsc@gmail.com';                
				    $mail->Password = 'wceacmsc@12345';                          
				    $mail->SMTPSecure = 'tls';                           
				    $mail->Port = 587;                                    
				    $mail->setFrom('wceacmsc@gmail.com', 'WCE-Hackathon');
				    $mail->addAddress($email);     
				    
				    $mail->isHTML(true);                                 
				    $mail->Subject = 'Verify your WCE-Hackathon account';
				    $mail->Body    = $message;

			    
			    	if($mail->send()){

				    	$email = urldecode($email);

				    	$query = "INSERT INTO registration(id, name, email, password, phone_number, gender, active_hash, recovery_hash, status) values ('','$name', '$email', '$password', '$contact_no', '$gender', '$active_hash', '', 100)";

				    	$conn->query($query);


						echo '<div class="alert alert-success">
						  <strong></strong>Registered Successfully. Please verify your account. 
						</div>';
					}



				} catch (Exception $e) {
			    echo '<div class="alert alert-danger">
			  			Please try out again.
						</div>';
				}

		
		}

		else {
			echo '<div class="alert alert-danger">
	   				There is the problem of server please try again
				</div>';
		}
	}

	else{
		echo $cnt;
	}
?>