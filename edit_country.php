<?php
require("connection.php");  
if(isset($_POST['country_type'])){
	
	$country_type = mysqli_real_escape_string($conn, $_POST['country_type']);

	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($conn , "UPDATE country SET country_type='$country_type'  WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>