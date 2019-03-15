<?php  
if(isset($_POST["id"]))  
{   
// $connect = mysqli_connect("localhost", "root", "", "veechite_dashboard_savasaachi");
require('connection.php');
$query =   "SELECT *FROM content
WHERE id = '".$_POST["id"]."'";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))  
{  

?>

    <div class="modal-item">
        <span>Business Name</span>

        <div class="row">
            <div class="col-md-6">
                <textarea style="width:104%;margin-left:-10px;" rows="1" class="note-add bs_name" onclick="copy_name()" readonly><?php echo $row["name"]?></textarea>
            </div>

            <div class="col-md-6">
                <textarea style="width:104%;margin-left:-10px;" rows="1" class="note-add content_date"  onclick="copy_date()" readonly><?php echo $row["date"];?></textarea>
            </div>
        </div>

    </div>

<div class="modal-item">
<span>Post Material & Tags</span>
<textarea rows="5" class="note-add post_material_tags"  onclick="copy_tags_post_material()" readonly >
<?php echo $row["post_material"];?>
        

<?php echo $row["tags"];?>
</textarea>
</div>


    <div class="modal-item">
        <span>Poster Material</span>
        <textarea rows="5" class="note-add poster_material" onclick="copy_poster_material()" readonly><?php echo $row["poster_material"];?></textarea>
    </div>

    <div class="modal-item">
        <span>Vision</span>
        <textarea rows="5" class="note-add vision" onclick="copy_vision()" readonly><?php echo $row["vision"];?></textarea>
    </div>

    <div class="modal-item">
        <span>Comment</span>
        <textarea rows="5" class="note-add comment" onclick="copy_comment()" readonly><?php echo $row["comment"];?></textarea>
    </div>

<?php
}
}

?>



<script>
function copy_name() {
  var copyText = document.getElementsByClassName("bs_name");
  copyText.select();
  document.execCommand("copy");
}
</script>