<?php 
    include "auth/auth_admin.php";
?>
<?php
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $country_type = mysqli_real_escape_string($conn, $_POST["country_type"]);
        
        //check if user exists
        $check=mysqli_query($conn,"select * from country where country_type='$country_type' ");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            
            ?>
                <script>alert("country Exists");
                window.location.href="add_country.php";</script>
            <?php
         }
         //check if user exists
		
		else {

			if(isset($_POST['add'])){

				$sql = "INSERT INTO country". "(country_type) ". 
				"VALUES('$country_type')";
				
				mysqli_select_db($conn,'dashboard_savasaachi');
				$retval = mysqli_query($conn,$sql);
				if($retval){

					        ?>
								<script>alert("country Successfully Added");
								window.location.href="add_country.php";</script>
							<?php
							 
						   }
								
					if(!$retval){
								 die('Could sign up: ' . mysqli_error($con));
							}
                        }
            }
											
									
				mysqli_close($conn);


?>