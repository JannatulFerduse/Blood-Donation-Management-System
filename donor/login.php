<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['fname']) && empty($_POST['phone'])) {
$error = "Username or Password is invalid";
}
else{
// Define $fname and $password
$fname = $_POST['fname'];
$phone = $_POST['phone'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "Donor");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT fname, phone from donors where fname=? AND phone=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $fname, $phone);
$stmt->execute();
$stmt->bind_result($fname, $phone);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $fname; // Initializing Session
header("location: ../profile.php"); // Redirecting To Profile Page
}

}
?>