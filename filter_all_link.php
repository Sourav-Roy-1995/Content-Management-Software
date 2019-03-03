
<!--===============================================
                    Start all-content
================================================-->
 
<?php					   	
require("connection.php");
$business_name = mysqli_real_escape_string($conn, $_POST['name']);					
$result = mysqli_query($conn,"SELECT * FROM business WHERE name= '".$business_name."'");
while($row=mysqli_fetch_array($result)){
$id=$row['id'];
?>


<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">Business Name</th>
            <th scope="col">package</th>
            <th scope="col">facebook URL</th>
            <th scope="col">Twitter URL</th>
            <th scope="col">Instagram URL</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="one_line"><?php echo $row['name']?></td>
            <td class="one_line"><?php echo $row['package']?></td>
            <td class="one_line"><a href="<?php echo $row['fb_url']?>" target="_blank">Facebook.com</a></td>
            <td class="one_line"><a href="<?php echo $row['twitter_url']?>" target="_blank">Twitter.com</a></td>
            <td class="one_line"><a href="<?php echo $row['insta_url']?>" target="_blank">instagram.com</a></td>
            <td class="one_line"><input type="button" name="view" value="Login Info" id="<?php echo $row["id"]; ?>" class="btn btn-info view_data" /> 
            </td>
        </tr>
        
    </tbody>
</table>


<?php                                  
}
?>
       

