<?php

$con= mysqli_connect('localhost','root','','uid_project');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$Name = $_POST['fname'];
$Email = $_POST['email'];
$Phone_number = $_POST['phno'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$Address_1 = $_POST['add1'];
$Address_2 = $_POST['add2'];
$Country = $_POST['country'];
$City = $_POST['city'];
$Region = $_POST['region'];
$Pincode = $_POST['pcode'];
$Username = $_POST['uname'];
$Password = $_POST['psswd'];






$sql ="insert into details values('".$Name."','".$Email."','".$Phone_number."','".$DOB."','".$Gender."','".$Address_1."','".$Address_2."','".$Country."','".$City."','".$Region."','".$Pincode."','".$Username."','".$Password."')";

$rs = mysqli_query($con,$sql);

if($rs)
{
		echo"<h1>Successful submission</h1>";
		echo "<a href='uid_login.html'>Click here to go to the Login page</a>";
		
		
}

?>

