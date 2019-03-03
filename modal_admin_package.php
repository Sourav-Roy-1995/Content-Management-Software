<?php  
if(isset($_POST["types"]))  
{   
require('connection.php');
$types = mysqli_real_escape_string($conn, $_POST['types']);
$query =   "SELECT *FROM business WHERE package= '".$types."' ";
$result = mysqli_query($conn, $query);
?>
<div class="modal-header">
    <h6 class="modal-title text-center" id="exampleModalLong4Title"><?php echo $_POST["types"]?></h6>
</div> 
<?php 
if(mysqli_num_rows($result) > 0){
?>
<div class="row">
<div class="col-lg-12">
    <div class="campaign-cordinator1">
        <h3></h3>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Business Name</th>
                    <th scope="col">Package</th>
                </tr>
            </thead>
            
            <?php
            while($row = mysqli_fetch_array($result))  
            {  
                
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $row["name"]?></td>
                        <td><?php echo $row["package"]?></td>
                    </tr>
                </tbody>   
            <?php
            }
            }
            }
            ?>
        </table>
    </div>
  </div>
</div>

