<?php

	include "auth/auth_admin.php";
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        
        //check if user exists
        $check=mysqli_query($conn,"select * from user where name='$name' ");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            
            ?>
                <script>alert("User Name Exists");
                window.location.href="adduser.php";</script>
            <?php
         }
         //check if user exists
		
		else {

		if(isset($_POST['signup'])){

				$email = mysqli_real_escape_string($conn, $_POST["email"]); 
				$team_name = mysqli_real_escape_string($conn, $_POST["team_name"]);  
				$role = mysqli_real_escape_string($conn, $_POST["role"]);
	            $password = mysqli_real_escape_string($conn, md5($_POST["password"]));  

				
				$sql = "INSERT INTO user". "(name,email,team_name,role,password) ". 
				"VALUES('$name','$email','$team_name','$role','$password')";
				
				mysqli_select_db($conn,'veechite_dashboard_savasaachi');
				$retval = mysqli_query($conn,$sql);
				if($retval){
	
					        ?>
								<script>alert("Successfully Registered");
								window.location.href="adduser.php";</script>
							<?php
							 
						   }
								
					if(!$retval ){
								 die('Could sign up: ' . mysqli_error($con));
							}
						}
				}							
									
				mysqli_close($conn);


?>