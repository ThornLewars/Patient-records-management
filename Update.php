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
     <title> Update-Patient</title>
</head>
   <body>
     <nav>
      <label class="logo">People caring for People</label>
      <ul>
       <li><a class="#" href="Index.html">Home</a></li>
        <li><a class="#" href="Newpatient.html">Register Patient</a></li>
         <li><a class="active" href="Update.php">Update Patient</a></li>
          <li><a class="#" href="Schedule.html">Schedule Appointment</a></li>
           <li><a class="#" href="Retrieve.php">Retrieve Patient Record</a></li>
        </ul>
     </nav> 
	 <div class="container">

		<center> 
		<div class="title"> 
	    <h4>Update patient's information<h4>
		</div>
 <form action="update.php" method="POST">
<div class="Search">
      <div class="input-box">
      <input type="text" class="searchTerm" name="ID" placeholder="Search patient TRN to Update" style= input>
	  <br>
	  <br>
     <input type="submit" class="searchButton" name="search" value="Search">
	  </div>
	 </div>
 </form> 
 </center>
 <?php
   $connection =mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'khp');
   
    if(isset($_POST['search']))
	{
	   $TRN =$_POST['ID'];
	
	   $query ="SELECT * FROM patients WHERE TRN='$TRN' ";
	   $query_run =mysqli_query($connection,$query);
	
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
			  <input type="none" name="Lastname" value="<?php echo $row['Lastname']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details"> MiddleName</span>
			  <input type="text" name="Middlename"value="<?php echo $row['Middlename']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details">Email</span>
			  <input type="text" name="Email" value="<?php echo $row['Email']?>"  />
			  </div>
			   <div class="input-box">
			   <span class="details">Phone</span>
			  <input type="text" name="Phone" value="<?php echo $row['Phone']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details">Alternative Phone</span>
			  <input type="text" name="Alt_Phone" value="<?php echo $row['Alt_Phone']?>" />
			  </div>
			 <div class="input-box">
			 <span class="details">Address</span>
			  <input type="text" name="Address" value="<?php echo $row['Address']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details">City</span>
			  <input type="text" name="City"value="<?php echo $row['City']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details">State</span>
			  <input type="text" name="State" value="<?php echo $row['State']?>"  />
			  </div>
			   <div class="input-box">
			   <span class="details">Country</span>
			  <input type="text" name="Country"value="<?php echo $row['Country']?>" />
			  </div>
			   <div class="input-box">
			   <span class="details">DOB</span>
			  <input type="text" name="DOB" value="<?php echo $row['DOB']?>"  />
			  </div>
			   <div class="input-box">
			   <span class="details">TRN</span>
			  <input type="text" name="TRN" value="<?php echo $row['TRN']?>" readonly />
			  </div>
	          <div class="gender-details">
	   <span class="gender-title">Gender</span>
	     <div class="category">
		 <div class="input-box">
        <span class="details">Gender</span>
          <input type="text"name="Gender" value="<?php echo $row['Gender']?>" >
       </div>
    </div>
	</div>
	<div class="status-details">
	   <span class="status-title">Marital Status</span>
	     <div class="category">
	  <div class="input-box">
        <span class="details">Status</span>
          <input type="text"name="Status" value="<?php echo $row['Status']?>" >
       </div>
	</div> 
	<span class="Kin-title">Next of Kin</span>
	<div class="Next-of-kin">
      <div class="input-box">
        <span class="details">First Name</span>
          <input type="text"name="Kin_Firstname" value="<?php echo $row['Kin_Firstname']?>" >
       </div>
	   <div class="input-box">
        <span class="details">Last Name</span>
          <input type="text" name="Kin_Lastname"value="<?php echo $row['Kin_Lastname']?>" >
       </div>
	   <div class="input-box">
        <span class="details">Middle Name</span>
          <input type="text" name="Kin_Middlename" value="<?php echo $row['Kin_Middlename']?>">
       </div>
	   <div class="input-box">
        <span class="details">Telephone</span>
          <input type="text" name="Kin_Phone" value="<?php echo $row['Kin_phone']?>">
       </div>
	   <div class="input-box">
        <span class="details">Email Address</span>
          <input type="text" name="Kin_Email"value="<?php echo $row['Kin_Email']?>">
       </div>
	   <div class="input-box">
        <span class="details">Address</span>
          <input type="text" name="Kin_Address" value="<?php echo $row['Kin_Address']?>">
       </div>
	   <div class="input-box">
        <span class="details">City</span>
          <input type="text" name="Kin_City" value="<?php echo $row['Kin_City']?>">
       </div>
	   <div class="input-box">
        <span class="details">Country</span>
          <input type="text"name="Kin_Country" value="<?php echo $row['Kin_Country']?>">
       </div>
	   <div class="input-box">
        <span class="details">Relationship</span>
          <input type="text"name="Relationship" value="<?php echo $row['Relationship']?>">
       </div>
	   </div>
	   <span class="Ins-title">Insurance information</span>
	<div class="Insurance">
      <div class="input-box">
        <span class="details">Insurance Company</span>
          <input type="text" name="Company" value="<?php echo $row['Company']?>">
       </div>
	   <div class="input-box">
        <span class="details">Policy Number</span>
          <input type="text"name="Policy_Num" value="<?php echo $row['Policy_Num']?>">
       </div>
	   <div class="input-box">
        <span class="details">Branch</span>
          <input type="text"name="Branch" value="<?php echo $row['Branch']?>">
       </div>
	   <div class="input-box">
        <span class="details">Telephone</span>
          <input type="text"name="Ins_Phone"value="<?php echo $row['Ins_Phone']?>">
       </div>
	   </div>
	    <div class="button">
	<input type="Submit"name= "update"value="Update patient">
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

<?php
$connection =mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'khp');

 if(isset($_POST['update']))
 {
 $Lastname = $_POST['Lastname'];
 $Middlename = $_POST['Middlename'];
 $Phone = $_POST['Phone'];
 $Alt_Phone = $_POST['Alt_Phone'];
 $Email = $_POST['Email'];
 $Address = $_POST['Address'];
 $City = $_POST['City'];
 $State = $_POST['State'];
 $Country = $_POST['Country'];
 $Gender = $_POST['Gender'];
 $Status = $_POST['Status'];
 $DOB =$_POST['DOB'];
 $Kin_Firstname = $_POST['Kin_Firstname'];
 $Kin_Lastname = $_POST['Kin_Lastname'];
 $Kin_Middlename = $_POST['Kin_Middlename'];
 $Kin_phone = $_POST['Kin_Phone'];
 $Kin_Email = $_POST['Kin_Email'];
 $Kin_Address = $_POST['Kin_Address'];
 $Kin_City = $_POST['Kin_City'];
 $Kin_Country = $_POST['Kin_Country'];
 $Relationship =$_POST['Relationship'];
 $Company = $_POST['Company'];
 $Policy_Num = $_POST['Policy_Num'];
 $Branch = $_POST['Branch'];
 $Ins_Phone = $_POST['Ins_Phone'];
 
 $query = "UPDATE 'patients' SET Lastname='$_POST[Lastname]',DOB='$_POST[DOB]',Middlename='$_POST[Middlename]',Phone='$_POST[Phone]',Alt_Phone='$_POST[Alt_Phone]',Email='$_POST[Email]',Address='$_POST[Address]',City='$_POST[City]',State='$_POST[State]',Country='$_POST[Country]',Gender='$_POST[Gender]',Status='$_POST[Status]',Kin_Firstname='$_POST[Kin_Firstname]',Kin_Lastname='$_POST[Lastname]',Kin_Middlename='$_POST[Middlename]',Kin_Phone='$_POST[Kin_Phone]',Kin_Email='$_POST[Kin_Email]',Kin_Address='$_POST[Kin_Address]',Kin_City='$_POST[Kin_City]',Kin_Country='$_POST[Kin_Country]',Relationship='$_POST[Relationship]',Company='$_POST[Company]',Policy_Num='$_POST[Policy_Num]',Branch='$_POST[Branch]',Ins_Phone='$_POST[Ins_Phone]'where TRN='$_POST[TRN]'";
 $query_run = mysqli_query($connection,$query);
 
 if($query_run)
   {
	   echo '<script> alert("Patient Data Updated") </script>';
   }
   else 
    {
	   echo '<script> alert("Unable to update patient data") </script>';
      }
   }
 
	 
?>