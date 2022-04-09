<?php
  $username= $_POST['Username'];
  $password =$_POST['Password'];
  
    //Database connection here
	$con = new mysqli("localhost","root","","khp");
	if($con->connect_error) {
		die("Failed  to connect :".$con->connect_error);
	}else {
		$stmt = $con->prepare ("select * from credentials WHERE Username = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['Password'] === $password){
					header('location: http://localhost/SIphp/Index.html');
			}else{
				echo '<script> alert("Invalid username or pasword") </script>';
			
			}
		}else {
			echo header('location: http://localhost/SIphp/Login.html');
		}		
	
	}
?>