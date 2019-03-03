<?php
require("connection.php");  
if(isset($_POST['id'])){

    $id = $_POST['id'];

	//  query to update data 
	$result  = mysqli_query($conn , "DELETE From team  WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>