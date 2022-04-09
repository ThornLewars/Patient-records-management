<?php
//maps HTML variable names to SQL database field names//
 $Firstname = $_POST['Firstname'];
 $Lastname = $_POST['Lastname'];
 $Middlename = $_POST['Middlename'];
 $Phone = $_POST['Phone'];
 $Alt_Phone = $_POST['Alt_Phone'];
 $Email = $_POST['Email'];
 $Address = $_POST['Address'];
 $City = $_POST['City'];
 $State = $_POST['State'];
 $Country = $_POST['Country'];
 $DOB = $_POST['DOB'];
 $TRN = $_POST['TRN'];
 $Gender = $_POST['Gender'];
 $Status = $_POST['Status'];
 $Kin_Firstname = $_POST['Kin_Firstname'];
 $Kin_Lastname = $_POST['Kin_Lastname'];
 $Kin_Middlename = $_POST['Kin_Middlename'];
 $Kin_phone = $_POST['Kin_Phone'];
 $Kin_Email = $_POST['Email'];
 $Kin_Address = $_POST['Kin_Address'];
 $Kin_City = $_POST['Kin_City'];
 $Kin_Country = $_POST['Kin_Country'];
 $Relationship =$_POST['Relationship'];
 $Company = $_POST['Company'];
 $Policy_Num = $_POST['Policy_Num'];
 $Branch = $_POST['Branch'];
 $Ins_Phone = $_POST['Ins_Phone'];
 
 //checks if fields are empty and opens connection//
 If(!empty($Firstname) ||!empty($Lastname)||!empty($Middlename) ||!empty($Phone)|| !empty($Alt_Phone)||!empty($Email)||!empty($Address)||!empty($City)||!empty($State)||!empty($Country)||!empty($DOB)||!empty($TRN)||!empty($Gender)||!empty($Status)
	 ||!empty($Kin_Firstname)||!empty($Kin_Lastname)||!empty($Kin_Middlename)|!empty($Kin_phone)||!empty($Kin_Email)||!empty($Kin_Address)||!empty($Kin_City)||!empty($Kin_Country)|| !empty($Relationship)
     ||!empty($Company)||!empty($Policy_Num)||!empty($Branch)||!empty($Ins_Phone)) {
	 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname ="khp";
	 
	 //ties connetion to database//
	 $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	 if (mysqli_connect_error()) {
		 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	 } else {
		 $SELECT = "SELECT TRN from patients Where TRN = ? Limit 1";
	     $INSERT ="INSERT Into patients (Firstname,Lastname,Middlename,Phone,Alt_Phone,Email,Address,City,State,Country,DOB,TRN,Gender,Status,Kin_Firstname,Kin_Lastname,Kin_Middlename,Kin_Phone,Kin_Email,Kin_Address,Kin_City,Kin_Country,Relationship,Company,Policy_Num,Branch,Ins_Phone)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	
	//prepare statement
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("i",$TRN);
	$stmt->execute();
	$stmt->bind_result($TRN);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	if($rnum==0) {
		$stmt->close();
		//writes info user enters to fields in database//
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssssssssssssssssssssssssss",$Firstname,$Lastname,$Middlename,$Phone,$Alt_Phone,
		$Email,$Address,$City,$State,$Country,$DOB,$TRN,$Gender,$Status, 
		$Kin_Firstname,$Kin_Lastname,$Kin_Middlename,$Kin_phone,$Kin_Email,$Kin_Address, 
		$Kin_City,$Kin_Country,$Relationship,$Company,$Policy_Num,$Branch,$Ins_Phone);
		$stmt->execute();
		echo '<script> alert("Record Successfully Created") </script>';
	      }else {
			  echo'<script> alert("TRN exists in another record") </script>';
		 }
		 $stmt->close();
		 $conn->close();
	  }
	 }else{
		 echo '<script> alert("All fields are required") </script>';
	 die();
	 }
	 
 ?>
 