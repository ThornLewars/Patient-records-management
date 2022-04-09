<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!-- css files -->  
<link href="CSS/Index-style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="CSS/schedule.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-
  scale=1.0">

     <title> Retrieve-Apointment</title>
</head>
   <body>
  <div class="navbar">
  <a class=""href="Index.html">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Appointment 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class="#" href="appointment.html">Schedule Appointment</a>
      <a class="active" href="retrieve-ap.php">View Appointments</a>
    </div>
	</div>
  <div class="dropdown">
    <button class="dropbtn">Patient 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class="#" href="Newpatient.html">Register Patient</a>
      <a class="#" href="Retrieve.php">View Patient</a>
      <a class="#"href="Update.php">Update Patient</a>
    </div>
  </div>
  <a class=""href="Login.php">logout</a>
  </div>
  
 
 <div class="container">

		<center> 
		<div class="title"> 
	    <h4>Retrieve Appointment Information<h4>
		</div>
 <form action="retrieve-ap.php" method="POST">
<div class="Search">
      <div class="input-box">
      <input type="text" class="searchTerm" name="ID" placeholder="Patient TRN to Search" style= input>
	  	</div>
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

   $query = "SELECT * FROM Apointments where TRN='$TRN' ";
   $query_run = mysqli_query($connection,$query);

   while($row = mysqli_fetch_array($query_run))
    {
      ?>
	  <div class="center">
	 <form action="" method="POST"> 
      <div class="title"> 
	  <center>
	    <h4>Appointment-Details<h4>
		</center>
		</div>
		<div class="Apointment-details">
  <div class="input-box">
    <input type="text" name="Firstname" value="<?php echo $row['Firstname']?>"readonly >
	</div>
	<br>
	 <div class="input-box">
	<input type="text" name="Lastname" value="<?php echo $row['Lastname']?>"readonly >
	</div>
	<br>
	 <div class="input-box">
	<input type="text" name="TRN" value="<?php echo $row['TRN']?>" readonly>
	 </div>
	 <br>
	 <div class="input-box">
	<input type="date" id="datepicker" name="Date" value="<?php echo $row['Date']?>" readonly >
	</div>
		 <div class="input-box">
	<input type="time" id="time" name="Time" value="<?php echo $row['Time']?>" readonly>
	</div>
	<div class="input-box">
	<input type="text" id="doctor" name="Doctor" value="<?php echo $row['Doctor']?>" readonly>
	   </div>
		 </div> 
		 </div>
      </form>
	   <?php
	  
    }
 }
?>


 </body>
</html>
</footer>