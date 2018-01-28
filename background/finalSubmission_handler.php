<?php

	session_start();

	require '../vendor/autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$name1 = $_GET['name1'];
	$name2 = $_GET['name2'];
	$name3 = $_GET['name3'];
	$name4 = $_GET['name4'];

	$email1 = $_GET['email1'];
	$email2 = $_GET['email2'];
	$email3 = $_GET['email3'];
	$email4 = $_GET['email4'];

	$mobile1 = $_GET['mobile1'];
	$mobile2 = $_GET['mobile2'];
	$mobile3 = $_GET['mobile3'];
	$mobile4 = $_GET['mobile4'];

	$gender1 = $_GET['gender1'];
	$gender2 = $_GET['gender2'];
	$gender3 = $_GET['gender3'];
	$gender4 = $_GET['gender4'];

	$teamName = $_GET['teamName'];
	$nameOfCollege = $_GET['nameOfCollege'];
	$ideaTitle = $_GET['ideaTitle'];
	$ideaSummary = $_GET['ideaSummary'];

	$id = $_SESSION['id'];

	require '../include/db_config.php';

    $db = new Database();
	$conn = $db->getConnection();

	//query for retriving teamIdCnt

	$query = "SELECT teamIdCnt FROM counter";
	$q = $conn->query($query);
	if($q->setFetchMode(PDO::FETCH_ASSOC))
	{
		
		while ($r = $q->fetch()) {
			 $teamId = $r['teamIdCnt'];
		}
		
	}

	$teamId++;


	$selectedDomainId = $_SESSION['domain_id']; 

	$query = "INSERT INTO team_details values ('$id' , '$selectedDomainId', '$teamId', '$teamName', '$nameOfCollege', '$ideaTitle', '$ideaSummary', 401)";

	if($conn->query($query)){

		$query = "INSERT INTO team_member_detail values ('$teamId', '$name1', '$email1', '$mobile1', '$gender1'), ('$teamId', '$name2', '$email2', '$mobile2', '$gender2'), ('$teamId', '$name3', '$email3', '$mobile3', '$gender3'), ('$teamId', '$name4', '$email4', '$mobile4', '$gender4')";

		if($conn->query($query)){
			$query = "UPDATE counter SET teamIdCnt = '$teamId'";

				if($conn->query($query)){
					


					$message = "You have Successfully Submitted the solution<br>Selected Domain Title is <b>".$_SESSION['domain_title']."</b> <br>And Your Team ID is <b>".$teamId."</b>";

					$mail = new PHPMailer(true);                         
					try {
				                                        
						    $mail->Host = 'smtp.gmail.com';  
						    $mail->SMTPAuth = true;                               
						    $mail->Username = 'wceacmsc@gmail.com';                
						    $mail->Password = 'wceacmsc@12345';                          
						    $mail->SMTPSecure = 'tls';                           
						    $mail->Port = 587;                                    
						    $mail->setFrom('wceacmsc@gmail.com', 'Rajat Dabade');
						    $mail->addAddress($email1);
						    $mail->addAddress($email2);
						    $mail->addAddress($email3);
						    $mail->addAddress($email4);     
						    
						    $mail->isHTML(true);                                 
						    $mail->Subject = 'Submission WCE-Hackathon';
						    $mail->Body    = $message;

					    
					    	if($mail->send()){

								echo '<div class="alert alert-success">
								  <strong></strong>Submitted Successfully. Please check your email. 
								</div>';
							}



						} catch (Exception $e) {
					    echo '<div class="alert alert-danger">
					  			Please try out again.
								</div>';
						}





				}
				else{
					echo "1";
				}
		}
		else{
			echo "2";
		}
	}
	else{
		echo "3";
	}

	