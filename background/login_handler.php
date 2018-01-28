<?php
	
	$email = $_GET['email'];
	$password = md5($_GET['password']);
	$status = 101;
	require '../include/db_config.php';

    $db = new Database();
	$conn = $db->getConnection();

	$query = "SELECT id, name, email, password, status, phone_number, gender FROM registration WHERE email = '$email' and password = '$password' and status = '$status'";

	$q = $conn->query($query);
	$cnt=0;		
	if($q->setFetchMode(PDO::FETCH_ASSOC))
	{
		
		while ($r = $q->fetch()) {
			 $name = $r['name'];
			 $id = $r['id'];
			 $phone_number = $r['phone_number'];
			 $gender = $r['gender'];
			 $cnt++;
		}
		
	}
	if($cnt==0)
		{
			echo $cnt;
		}
		else{
			session_start();
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;
			$_SESSION['phone_number'] = $phone_number;
			$_SESSION['gender'] = $gender;

			echo $cnt;
	}

?>



	
