<?php
require("connection.php");  
if(isset($_POST['password'])){
    
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));  

        $id = $_POST['id'];
        //  query to update data 
        $result = mysqli_query($conn , "UPDATE user SET password='$password' WHERE id='$id'");
    
    }
?>