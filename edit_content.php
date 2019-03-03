<?php
require("connection.php");  
if(isset($_POST['comment'])){
	

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$post_material = mysqli_real_escape_string($conn, $_POST['post_material']);
	$tags = mysqli_real_escape_string($conn, $_POST['tags']);
	$poster_material = mysqli_real_escape_string($conn, $_POST['poster_material']);
	$vision = mysqli_real_escape_string($conn, $_POST['vision']);
	$comment = mysqli_real_escape_string($conn, $_POST['comment']);
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($conn , "UPDATE content SET name='$name' , date='$date' , post_material = '$post_material', tags = '$tags' , poster_material = '$poster_material' , vision = '$vision' , comment = '$comment' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>