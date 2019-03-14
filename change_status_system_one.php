<?php
require("connection.php");  
if(isset($_POST['updated_status'])){
	
	$updated_status = mysqli_real_escape_string($conn, $_POST['updated_status']);
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($conn , "UPDATE content SET status = '$updated_status' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>