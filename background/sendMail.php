<?php

	$name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$message = $_GET['message'];
	$from = "rajatdabade1997@gmail.com";
	$to = "rajatdabade1997@gmail.com";

	$message .= " My name is ";
	$message .= $name;
	$message .= " My email address is ";
	$message .= $email;
	$message .= " and phone number is ";
	$message .= $phone;




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';

$mail = new PHPMailer(true);                         
try {
                                        
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'wceacmsc@gmail.com';                
    $mail->Password = 'wceacmsc@12345';                          
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                    
    $mail->setFrom('wceacmsc@gmail.com', 'Rajat Dabade');
    $mail->addAddress('wceacmsc@gmail.com');     
    
    $mail->isHTML(true);                                 
    $mail->Subject = 'About hackathon query';
    $mail->Body    = $message;

    
    if($mail->send()){
		echo '<div class="alert alert-success">
     Thank you for reaching out to us. We will be contacting you soon.
  </div>';
	}



	} catch (Exception $e) {
    echo '<div class="alert alert-danger">
  			Please try out again.
			</div>';
	}
