<?php  
if(isset($_POST["id"]))  
{   
require('connection.php');
$query =   "SELECT *FROM business
WHERE id = '".$_POST["id"]."' ";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))  
{  

?>

<div class="modal-item">
    <span>Business Name</span>
    <textarea rows="1" class="note-add" readonly ><?php echo $row["name"];?></textarea>
</div>

<div class="modal-item">
    <span>Entry date</span>
    <textarea rows="1" class="note-add" readonly ><?php echo $row["entry_date"];?></textarea>
</div>

<div class="modal-item">
    <span>Expired date</span>
    <textarea rows="1" class="note-add" readonly ><?php echo $row["expired_date"];?></textarea>
</div>

<div class="modal-item">
    <span>Address</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["address"];?></textarea>
</div>

<div class="modal-item">
    <span>Contact</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["contact"];?></textarea>
</div>

<div class="modal-item">
    <span>Email</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["email"];?></textarea>
</div>

<div class="modal-item">
    <span>Note</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["note"];?></textarea>
</div>

<div class="modal-item">
    <span>Team</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["team_name"];?></textarea>
</div>

<div class="modal-item">
    <span>Campaign Coordinator</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["writer"];?></textarea>
</div>

<div class="modal-item">
    <span>Designer</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["designer"];?></textarea>
</div>

<div class="modal-item">
    <span>Posting Assistant</span>
    <textarea rows="1" class="note-add" readonly><?php echo $row["posting"];?></textarea>
</div>

<?php
}
}

?>
