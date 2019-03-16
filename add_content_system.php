
<?php

	session_start();
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if(isset($_REQUEST)){

			    $name = mysqli_real_escape_string($conn, $_POST['name']);
				$date = mysqli_real_escape_string($conn, $_POST['date']);
				$post_material = mysqli_real_escape_string($conn, $_POST['post_material']);
				$poster_material = mysqli_real_escape_string($conn, $_POST['poster_material']);
				$vision = mysqli_real_escape_string($conn, $_POST['vision']);
				$tags = mysqli_real_escape_string($conn, $_POST['tags']);
				$comment = mysqli_real_escape_string($conn, $_POST['comment']);

				
				$sql = "INSERT INTO content". "(name,date,post_material,poster_material,vision,tags,comment) ". 
				"VALUES('$name','$date','$post_material','$poster_material','$vision','$tags','$comment')";
				
				mysqli_select_db($conn,'dashboard_savasaachi');
				$retval = mysqli_query($conn,$sql);
				if($retval){	
					          ?>
								<script>alert("Successfully Submitted");
								window.location.href="javascript:history.back()";</script>
							  <?php
						   }
								
					if(! $retval ){
								 die('Could Not Submit: ' . mysqli_error($con));
							}
						}
											
									
				mysqli_close($conn);


?>