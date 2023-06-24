<?php 
	$con=mysqli_connect("localhost","root","","uid_project"); 
	if(!$con) { die(" Connection Error "); } 
    $user_name = $_GET["user"];
	
	
    $query = " select * from details where user_name='".$user_name."';";
	
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>View Records</title>
</head>
<body class="bg-dark" style="background-color:lightblue;">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table border="1" class="table table-bordered" style="padding:10px; font-size:35px">
							<caption>Personal Detalis</caption>
							<br><br>
                            <tr>
							
                                <th> Name </th>
                                <th> Email </th>
                                <th> Phone_number </th>
                                <th> DOB </th>
								<th> Username </th>
								<th> Password </th>
							
                               
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $ph_no = $row['ph_no'];
                                        $dob = $row['dob'];
										$user_name= $row['user_name'];
										$passwd= $row['passwd'];
                            ?>
                                    <tr>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $ph_no ?></td>
                                        <td><?php echo $dob ?></td>
										<td><?php echo $user_name ?></td>
										<td><?php echo $passwd ?></td>
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>