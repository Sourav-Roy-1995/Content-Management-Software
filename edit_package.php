<?php
require("connection.php");  
if(isset($_POST['package_type'])){
	
	$package_type = mysqli_real_escape_string($conn, $_POST['package_type']);

	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($conn , "UPDATE package SET package_type='$package_type'  WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>