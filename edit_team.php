<?php
require("connection.php");  
if(isset($_POST['team_name'])){
	
    $team_name = mysqli_real_escape_string($conn, $_POST['team_name']);

	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($conn , "UPDATE team SET team_name='$team_name'  WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>