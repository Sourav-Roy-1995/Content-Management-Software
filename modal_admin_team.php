<?php  
if(isset($_POST["team"]))  
{   
require('connection.php');
$team = mysqli_real_escape_string($conn, $_POST['team']);
?>
<div class="modal-header">
    <h6 class="modal-title text-center" id="exampleModalLong7Title"><?php echo $_POST["team"]?></h6>
</div> 

<div class="row">
<div class="col-lg-12">
    <div class="campaign-cordinator1">
        <h3></h3>
        <table class="table table-bordered text-center">
            <tbody>
                <tr>
                    <?php         
                        $writer = "writer";
                        $sql_writer="SELECT * FROM user WHERE role= '$writer' AND team_name= '".$team."' ";
                        $result_writer = mysqli_query($conn, $sql_writer);
                        
                        ?>
                            <th scope="col">Campaign Cordinator</th>
                        <?php
                        if(mysqli_num_rows($result_writer) > 0){

                            while($row_writer=mysqli_fetch_array($result_writer)){
                                ?>
                                    <td scope="row" ><?php echo $row_writer["name"]?> </td>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <td scope="row">NULL</td>
                            <?php
                        } 
                        ?>

                </tr>

                <tr> 
                    <?php           
                        $designer = "designer";
                        $sql_designer="SELECT * FROM user WHERE role= '$designer' AND team_name= '".$team."' ";
                        $result_designer = mysqli_query($conn, $sql_designer);

                        ?>
                            <th scope="col">Designer</th>
                        <?php
                        if(mysqli_num_rows($result_designer) > 0){

                            while($row_designer=mysqli_fetch_array($result_designer)){
                                ?>
                                        <td scope="row" > <?php echo $row_designer["name"]?> </td>
                                <?php
                            }
                        } 

                        else
                        {
                            ?>
                                <td scope="row">NULL</td>
                            <?php
                        }
                        ?>
                    </tr> 

                    <tr>

                    <?php           
                        $posting = "posting";
                        $sql_posting="SELECT * FROM user WHERE role= '$posting' AND team_name= '".$team."' ";
                        $result_posting = mysqli_query($conn, $sql_posting);

                        ?>
                            <th scope="col">Posting</th>
                        <?php

                        if(mysqli_num_rows($result_posting) > 0){

                            while($row_posting=mysqli_fetch_array($result_posting)){
                                ?>
                                    
                                        <td scope="row" ><?php echo $row_posting["name"]?> </td>
                                <?php
                            }
                        }
                        
                        else
                        {
                            ?>
                                <td scope="row">NULL</td>
                            <?php
                        }
                        ?>
                       
                    </tr>
                </tbody>
        </table>
    </div>
</div>



<?php  
$active = "active";
$query =   "SELECT *FROM business WHERE team_name= '".$team."' AND bs_status = '".$active."' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
?>

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

                ?>
            </table>
                                
        </div>
    </div>
</div>
<?php
    }
}
?>