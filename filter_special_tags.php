<?php                          
require("connection.php");         
if(isset($_POST["name"]))     
{
$name = mysqli_real_escape_string($conn, $_POST['name']);
$result = mysqli_query($conn, "SELECT *FROM special_content
WHERE name = '".$name."' order by id desc limit 1");
if(mysqli_num_rows($result) > 0){

while($row=mysqli_fetch_array($result)){
$id=$row['id'];
$tags            =     $row['tags']    ;
echo $tags;
}
}
}
?>     
<?php 
?>
       

