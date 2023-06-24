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
			 
			 <link rel="stylesheet" href="side_bar.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
	
  <div class="sidebar">
    <div class="logo_details">
      
      <div class="logo_name"><img src="salad.png" width="25" height="25">Food Melange</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
     
      <li>
        <a href="book_or_recipe.html">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="user.php?user='.$user_name.'">     
          <i class="bx bx-user"></i>
          <span class="link_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      
      <li>
        <a href="addtocart.html">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      
    </ul>
  </div>
  <section class="home-section">
    <div class="text"><h2 style="padding-top: 25%; font-size:50px;">Welcome</h2><br><h1 style="text-align:center; font-size:70px; " >'.$result1["name"].'</h1></div>
  </section>
  <!-- Scripts -->
  <script src="script.js"></script>
</body>
</html>
		
		<a href="book_or_recipe.html" style="font-size:30px;">Food Melange</a>';
	  
	  
  }
  else
  {
	  echo '<html>
			<body>
			<h1>Invalid details entered</h1>';
  }
  

  

?>

 