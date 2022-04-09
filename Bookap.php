<?php
//declare variables
 $Firstname = $_POST['Firstname'];
 $Lastname = $_POST['Lastname'];
 $Date = $_POST['Date'];
 $Time = $_POST['Time'];
 $Doctor = $_POST['Doctor'];
 $TRN = $_POST['TRN'];
 //checks if fields are empty 
 If(!empty($Firstname) ||!empty($Lastname)||!empty($TRN) ||!empty($Date)|| !empty($Time)||!empty($Doctor))
 {
     $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname ="khp";
	  //create connection
	 $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	 if (mysqli_connect_error()) {
		 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	 } else {
		 $SELECT ="SELECT TRN from Apointments Where TRN = ? Limit 1";
	     $INSERT ="INSERT Into Apointments (Firstname,Lastname,TRN,Date,Time,Doctor)values(?,?,?,?,?,?)";
		 
		 //prepare statement
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("i",$TRN);
	$stmt->execute();
	$stmt->bind_result($TRN);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	
	if($rnum==0) {
		$stmt->close();
		//insert input into database fields
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssssss",$Firstname,$Lastname,$TRN,$Date,$Time,$Doctor);
		$stmt->execute();
		echo '<script> alert("Apointment Successfully Created!") </script>';
	      }
		  else {
			  echo'<script> alert("Matching Apointment already exist!") </script>';
		 }
		 $stmt->close();
		 $conn->close();
	  }
	 }else{
		 echo '<script> alert("All fields are required") </script>';
	 die();
	 }
 ?>
 