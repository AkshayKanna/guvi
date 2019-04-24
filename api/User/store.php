<?php 
include 'connection.php';
$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$email = $_POST['email'];
$dob = $_POST['DateofBirth'];
$gender = $_GET['Gender'];
$sql = "insert into details values($fname,$lname,$email,$dob,$gender);";
echo $sql;
?>
