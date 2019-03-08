<!--===============================================
                    Start all-content
================================================-->

<?php                          
require("connection.php");         
if(isset($_POST["date"]))     
{
$date = mysqli_real_escape_string($conn, $_POST['date']);
$designer_name = mysqli_real_escape_string($conn, $_POST['designer_name']);
$active = mysqli_real_escape_string($conn, $_POST['active']);

// $result = mysqli_query($conn,"SELECT * FROM content WHERE date= '".$date."' ");


$result = mysqli_query($conn, "SELECT *FROM business
INNER JOIN content  ON content.name=business.name
WHERE date= '".$date."'  AND business.designer = '".$designer_name."' AND business.bs_status = '".$active."' ");


if(mysqli_num_rows($result) > 0){
?>
<div class="content-update" id="content_table" style="margin:0px">
<h2>Content <i class="fas fa-long-arrow-alt-right" style="color:#1E1E1E;margin-left:5px;"></i><span style="margin-left:5px;color:#7E3E98;"> <?php echo $_POST["date"]?></span></h2>
<div class="table-content" >
<table class="table text-center">
<thead>
<tr>
<th scope="col">Business Name</th>
<th scope="col">Date</th>
<th scope="col">Post Material</th>
<th scope="col" class="d-none">Tags</th>
<th scope="col">Poster Material</th>
<th scope="col" class="d-none">Vision</th>
<th scope="col" class="d-none">Comment</th>
<th scope="col">Action</th>
</tr>
</thead>
<?php 
while($row=mysqli_fetch_array($result)){
$id=$row['id'];
$name            =     $row['name']  ;           
$date            =     $row['date'] ;            
$post_material   =     $row['post_material'];
$tags            =     $row['tags']    ;         
$poster_material =     $row['poster_material'];  
$vision          =     $row['vision']    ;       
$comment         =     $row['comment'] ;  
?>            
<tbody>
<tr id="<?php echo $row['id']; ?>">
<td data-target="name" class="one_line"><?php echo $name;?></td>
<td data-target="date" class="one_line"><?php echo $date;?></td>
<td data-target="post_material" class="one_line"><?php echo $post_material;?></td>
<td data-target="tags" class="one_line d-none"><?php echo $tags;?></td>
<td data-target="poster_material" class="one_line"><?php echo $poster_material;?></td>
<td data-target="vision" class="one_line d-none"><?php echo $vision;?></td>
<td data-target="comment" class="one_line d-none"><?php echo $comment;?></td>
<td class="btn-group custom-table" role="group">
<input type="button" name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info view_data" /> </td>
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
       

