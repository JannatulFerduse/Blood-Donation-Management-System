<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "donor");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from donors where fname = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];
$sex = $row['sex'];
$b_type = $row['b_type'];
$bday = $row['bday'];
$h_address = $row['h_address'];
$city = $row['city'];
$don_date = $row['don_date'];
$stats = $row['stats'];
$temp = $row['temp'];
$pulse = $row['pulse'];
$bp = $row['bp'];
$weight = $row['weight'];
$hemoglobin = $row['hemoglobin'];
$hbsag = $row['hbsag'];
$aids = $row['aids'];
$malaria_smear = $row['malaria_smear'];
$hematocrit = $row['hematocrit'];
$phone = $row['phone'];
$mobile = $row['mobile'];
?>