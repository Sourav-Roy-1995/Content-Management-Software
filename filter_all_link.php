
<!--===============================================
                    Start all-content
================================================-->
 
<?php					   	
require("connection.php");
$business_id= mysqli_real_escape_string($conn, $_POST['id']);					
$result = mysqli_query($conn,"SELECT * FROM business WHERE id= '".$business_id."'");
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
            <th scope="col">Login Info</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="one_line"><?php echo $row['name']?></td>
            <td class="one_line"><?php echo $row['package']?></td>
            <td class="one_line url"><a href="<?php echo $row['fb_url']?>" 
            target="_blank">Facebook.com</a></td>
            <td class="one_line url"><a href="<?php echo $row['twitter_url']?>" target="_blank">Twitter.com</a></td>
            <td class="one_line url"><a href="<?php echo $row['insta_url']?>" target="_blank">instagram.com</a></td>

            <td class="one_line">
                <a href="#<?php echo $row['id'];?>" name="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-sm view_data ">View</a> 
            </td>

        </tr>
        
    </tbody>
</table>


<?php                                  
}
?>
       



<!-- If link is null-->
<script>

    $("td.url a").each(function (i) {
        if ($(this).attr('href') == '') { 
            $(this).hide();
        } else {
            $(this).show();
        }
    });

</script> <!-- If link is null-->