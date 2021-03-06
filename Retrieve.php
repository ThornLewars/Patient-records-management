<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!-- css files -->  
<link href="CSS/Retrieve.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/Index-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/New_patient_style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">

     <title> Retrieve-Patient</title>
</head>
   <body>
   <nav>
   <label class="logo">People caring for People</label>
   <ul>
    <li><a class="#"href="Index.html">Home</a></li>
    <li><a class="#" href="Newpatient.html">Register Patient</a></li>
    <li><a class="#"href="Update.php">Update Patient</a></li>
    <li><a class="#" href="Schedule.html">Schedule Appointment</a></li>
    <li><a class="active" href="Retrieve.php">Retrieve Patient Record</a></li>
  </ul> 
  <label ID="icon">
  <i class="fas fa-bars"></i>
  </label>
 </nav>
 
 <div class="container">

		<center> 
		<div class="title"> 
	    <h4>Patient's Information<h4>
		</div>
 <form action="retrieve.php" method="POST">
<div class="Search">
      <div class="input-box">
      <input type="text" class="searchTerm" name="ID" placeholder="Patient TRN to Search" style= input>
	  <br>
	  <br>
     <input type="submit" class="searchButton" name="search" value="Search Data">
	  </div>
	 </div>
 </form>
 </center>
 
 <?php
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection,'khp');
 
 if(isset($_POST['search']))
 {
     $TRN =$_POST['ID'];

   $query = "SELECT * FROM patients where TRN='$TRN' ";
   $query_run = mysqli_query($connection,$query);

   while($row = mysqli_fetch_array($query_run))
    {
      ?>
	  
	      <form action="" method="POST">
		  <div class="Patient-details">
			   <div class="input-box">
			   <span class="details">FirstName</span>
     		  <input type="text" name="Firstname" value="<?php echo $row['Firstname']?>" readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">LastName</span>
			  <input type="none" name="Lastname" value="<?php echo $row['Lastname']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details"> MiddleName</span>
			  <input type="text" name="Middlename"value="<?php echo $row['Middlename']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">Email</span>
			  <input type="text" name="Email" value="<?php echo $row['Email']?>" readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">Phone</span>
			  <input type="text" name="Phone" value="<?php echo $row['Phone']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">Alternative Phone</span>
			  <input type="text" name="Alt_Phone" value="<?php echo $row['Alt_Phone']?>"readonly />
			  </div>
			 <div class="input-box">
			 <span class="details">Address</span>
			  <input type="text" name="Address" value="<?php echo $row['Address']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">City</span>
			  <input type="text" name="City"value="<?php echo $row['City']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">State</span>
			  <input type="text" name="State" value="<?php echo $row['State']?>" readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">Country</span>
			  <input type="text" name="Country"value="<?php echo $row['Country']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">DOB</span>
			  <input type="text" name="DOB" value="<?php echo $row['DOB']?>"readonly />
			  </div>
			   <div class="input-box">
			   <span class="details">TRN</span>
			  <input type="text" name="TRN" value="<?php echo $row['TRN']?>"readonly />
			  </div>
	          <div class="gender-details">
	   <span class="gender-title">Gender</span>
	     <div class="category">
		 <div class="input-box">
        <span class="details">Gender</span>
          <input type="text"name="Gender" value="<?php echo $row['Gender']?>" readonly>
       </div>
    </div>
	</div>
	<div class="status-details">
	   <span class="status-title">Marital Status</span>
	     <div class="category">
	  <div class="input-box">
        <span class="details">Status</span>
          <input type="text"name="Status" value="<?php echo $row['Status']?>" readonly>
       </div>
	</div> 
	<span class="Kin-title">Next of Kin</span>
	<div class="Next-of-kin">
      <div class="input-box">
        <span class="details">First Name</span>
          <input type="text"name="Kin_Firstname" value="<?php echo $row['Kin_Firstname']?>" readonly>
       </div>
	   <div class="input-box">
        <span class="details">Last Name</span>
          <input type="text" name="Kin_Lastname"value="<?php echo $row['Kin_Lastname']?>" readonly>
       </div>
	   <div class="input-box">
        <span class="details">Middle Name</span>
          <input type="text" name="Kin_Middlename" value="<?php echo $row['Kin_Middlename']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Telephone</span>
          <input type="text" name="Kin_Phone" value="<?php echo $row['Kin_phone']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Email Address</span>
          <input type="text" name="Kin_Email"value="<?php echo $row['Kin_Email']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Address</span>
          <input type="text" name="Kin_Address" value="<?php echo $row['Kin_Address']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">City</span>
          <input type="text" name="Kin_City" value="<?php echo $row['Kin_City']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Country</span>
          <input type="text"name="Kin_Country" value="<?php echo $row['Kin_Country']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Relationship</span>
          <input type="text"name="Relationship" value="<?php echo $row['Relationship']?>"readonly>
       </div>
	   </div>
	   <span class="Ins-title">Insurance information</span>
	<div class="Insurance">
      <div class="input-box">
        <span class="details">Insurance Company</span>
          <input type="text" name="Company" value="<?php echo $row['Company']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Policy Number</span>
          <input type="text"name="Policy_Num" value="<?php echo $row['Policy_Num']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Branch</span>
          <input type="text"name="Branch" value="<?php echo $row['Branch']?>"readonly>
       </div>
	   <div class="input-box">
        <span class="details">Telephone</span>
          <input type="text"name="Ins_Phone"value="<?php echo $row['Ins_Phone']?>"readonly>
       </div>
	   </div>
	       </form>
		   </div> 
		   </div>
	  <?php
	  
    }
 }
?>
 
 
 </body>
</html>