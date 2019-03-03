<?php 
    include "auth/auth_admin.php";
?>
<?php

	session_start();
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $team_name = mysqli_real_escape_string($conn, $_POST["team_name"]);
        
        //check if user exists
        $check=mysqli_query($conn,"select * from team where team_name='$team_name' ");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            
            ?>
                <script>alert("Team Exists");
                window.location.href="extra_pages.php";</script>
            <?php
         }
         //check if user exists
		
		else {

               if(isset($_POST['add'])){

				$sql = "INSERT INTO team". "(team_name) ". 
				"VALUES('$team_name')";
				
				mysqli_select_db($conn,'dashboard_savasaachi');
				$retval = mysqli_query($conn,$sql);
				if($retval){

					        ?>
								<script>alert("Team Successfully Added");
								window.location.href="extra_pages.php";</script>
							<?php
							 
						   }
								
					if(!$retval ){
								 die('Could sign up: ' . mysqli_error($con));
							}
                        }
            }
											
									
				mysqli_close($conn);


?>