<?php

	$email = $_GET['email'];
	$active_hash = $_GET['active_hash'];
	require '../include/db_config.php';
	$db = new Database();
	$conn = $db->getConnection();
	$null = "";
	$status = 101;


	$query = "SELECT active_hash FROM registration where email = '$email'";

	$q = $conn->query($query);
		
	$q->setFetchMode(PDO::FETCH_ASSOC);
		
		while ($r = $q->fetch()) {
			$dactive_hash = $r['active_hash'];
		}
	

	if($active_hash = $dactive_hash){
		$query = "UPDATE registration SET active_hash = '$null' , status = '$status' where email = '$email'";
		if($conn->query($query)){
			echo "Email is verified";
		}
		else
		{
			echo "Database problem";
		}
	}

	else{
		echo "Unable to verify";
	}