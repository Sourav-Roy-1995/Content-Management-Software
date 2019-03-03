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

        $package_type = mysqli_real_escape_string($conn, $_POST["package_type"]);
        
        //check if user exists
        $check=mysqli_query($conn,"select * from package where package_type='$package_type' ");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            
            ?>
                <script>alert("Package Exists");
                window.location.href="extra_pages.php";</script>
            <?php
         }
         //check if user exists
		
		else {

               if(isset($_POST['add'])){

				$sql = "INSERT INTO package". "(package_type) ". 
				"VALUES('$package_type')";
				
				mysqli_select_db($conn,'dashboard_savasaachi');
				$retval = mysqli_query($conn,$sql);
				if($retval){

					        ?>
								<script>alert("Package Successfully Added");
								window.location.href="add-package.php";</script>
							<?php
							 
						   }
								
					if(!$retval){
								 die('Could sign up: ' . mysqli_error($con));
							}
                        }
            }
											
									
				mysqli_close($conn);


?>