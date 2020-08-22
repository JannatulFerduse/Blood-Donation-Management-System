<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i>
	<?php echo $login_session; ?><br>
<h3>First Name 		:<?php echo $mname; ?></h3><br>
<h3>Last Name 		:<?php echo $lname; ?></h3><br>
<h3>Sex 			:<?php echo $sex; ?></h3><br>
<h3>Blood Group 	:<?php echo $b_type; ?></h3><br>
<h3>Date of Birth 	:<?php echo $bday; ?></h3><br>
<h3>Address 		:<?php echo $h_address; ?></h3><br>
<h3>City 			:<?php echo $city; ?></h3><br>
<h2>------MEDICAL INFORMATION--------</h2>
<h3>Donation Date 	:<?php echo $don_date; ?></h3><br>
<h3>Statistics 		:<?php echo $stats; ?></h3><br>
<h3>Temperature 	:<?php echo $temp; ?></h3><br>
<h3>Pulse Rate 		:<?php echo $pulse; ?></h3><br>
<h3>Blood Pressure 	:<?php echo $bp; ?></h3><br>
<h3>Weight 			:<?php echo $weight; ?></h3><br>
<h3>Himoglobin 		:<?php echo $hemoglobin; ?></h3><br>
<h3>HBSAG 			:<?php echo $hbsag; ?></h3><br>
<h3>AIDS 			:<?php echo $aids; ?></h3><br>
<h3>Malaria Smear 	:<?php echo $malaria_smear; ?></h3><br>
<h3>Hematocrit 		:<?php echo $hematocrit; ?></h3><br>
<h3>Phone 			:<?php echo $phone; ?></h3><br>
<h3>Mobile 			:<?php echo $mobile; ?></h3><br>
	
</i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<br>

 
</div>
</body>
</html>