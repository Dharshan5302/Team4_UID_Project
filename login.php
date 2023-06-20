<?php


  $user_name = $_POST["username"];
  $_password = $_POST["passwd"];
  
  $con= mysqli_connect('localhost','root','','uid_project');
  $sql="select * from details where user_name='".$user_name."' and passwd='".$_password."';";
  
  $result=mysqli_query($con,$sql);
  $resultcheck=mysqli_num_rows($result);
  
  $result1=mysqli_fetch_assoc($result);
  
  if($resultcheck>0)
  {
	  

		echo'<html>
			 <body>
			 <h1>Welcome'.$result1["name"].'</h1>
			 
		
		<a href="book_or_recipe.html"\>Click here to go to the website</a>';
	  
	  
  }
  else
  {
	  echo '<html>
			<body>
			<h1>Invalid details entered</h1>';
  }
  

?>

 