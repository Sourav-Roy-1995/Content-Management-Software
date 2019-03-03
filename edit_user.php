<?php
require("connection.php");  
if(isset($_POST['name'])){
    
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $team_name = mysqli_real_escape_string($conn, $_POST['team_name']);
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        
        $id = $_POST['id'];
        //  query to update data 
        $result = mysqli_query($conn , "UPDATE user SET name='$name', email='$email', team_name='$team_name', role='$role' WHERE id='$id'");
    
    }
?>