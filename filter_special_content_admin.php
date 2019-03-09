
<!--===============================================
                    Start all-content
================================================-->
 
<?php                          
require("connection.php");         
if(isset($_POST["date"]))     
{
$date = mysqli_real_escape_string($conn, $_POST['date']);
$result = mysqli_query($conn,"SELECT * FROM special_content WHERE date= '".$date."' ");
if(mysqli_num_rows($result) > 0){
?>
<div class="content-update" id="content_table" style="margin:0px">
<h2>Special Content <i class="fas fa-long-arrow-alt-right" style="color:#1E1E1E;margin-left:5px;"></i><span style="margin-left:5px;color:#7E3E98;"> <?php echo $_POST["date"]?></span></h2>
<div class="table-content" >
<table class="table text-center">
<thead>
<tr>
<th scope="col">Business Name</th>
<th scope="col">Date</th>
<th scope="col" class="d-none">Post Material</th>
<th scope="col" class="d-none">Tags</th>
<th scope="col" class="d-none">Poster Material</th>
<th scope="col" class="d-none">Vision</th>
<th scope="col" class="d-none">Comment</th>
<th scope="col" >Status</th>
<th scope="col">Change Status</th>
<th scope="col">Action</th>
</tr>
</thead>
<?php 
while($row=mysqli_fetch_array($result)){
$id=$row['id'];
$name            =     $row['name'];           
$date            =     $row['date'];            
$post_material   =     $row['post_material'];
$tags            =     $row['tags'];         
$poster_material =     $row['poster_material'];  
$vision          =     $row['vision'];       
$comment         =     $row['comment'];  
$status         =      $row['status']; 
?>            
<tbody>
<tr id="<?php echo $row['id']; ?>">
<td data-target="name" class="one_line"><?php echo $name;?></td>
<td data-target="date" class="one_line"><?php echo $date;?></td>
<td data-target="post_material" class="one_line d-none"><?php echo $post_material;?></td>
<td data-target="tags" class="one_line d-none"><?php echo $tags;?></td>
<td data-target="poster_material" class="one_line d-none"><?php echo $poster_material;?></td>
<td data-target="vision" class="one_line d-none"><?php echo $vision;?></td>
<td data-target="comment" class="one_line d-none"><?php echo $comment;?></td>
<td data-target="status" class="one_line status"><?php echo $status;?></td>
<td data-target="status_done" class="one_line d-none">Done</td>
<td data-target="status_cancel" class="one_line d-none">Processing</td>

<td>
    <div class="btn-group custom-table" role="group">
        <a href="#" id="update_status" class="btn btn-info btn-sm done-btn" data-role="update_status" data-id="<?php echo $row['id'] ;?>" ><i class="fas fa-check"></i></a>

        <a href="#" id="cancel_status" class="btn btn-info btn-sm done-btn" data-role="cancel_status" data-id="<?php echo $row['id'] ;?>" ><i class="fas fa-times"></i></a>
    </div>
</td>

<td>
    <div class="btn-group custom-table-2" role="group">
        <a href="#" class="btn btn-info btn-sm" data-role="update" data-id="<?php echo $row['id'] ;?>">Edit</a>
        <a href="#" name="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-sm view_data ">View</a> 
    </div>
</td>

</tr>
<?php
}
}
}
?> 
</tbody>
</table> <!--[/End table]-->        
<?php 
?> <!--End Get Content --> 
       

