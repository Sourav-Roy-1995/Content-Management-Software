<?php	
include "auth/auth_admin.php";	

$current_date  = strtotime(date("d-m-Y"));
?><p>Current date:</p><?php echo $current_date ;

require("connection.php");			
$result = mysqli_query($conn,"SELECT * FROM business");

while($row=mysqli_fetch_array($result)){
    $business_id=$row['id'];
    $entry_date = strtotime($row['entry_date']);
    $exp_date = strtotime($row['expired_date']);
    ?>
        <p><b>Business Id: </b><?php echo $business_id;?></p>
    <?php 

    ?>
        <p>Entry date: <?php echo $entry_date;?></p>
    <?php

    ?>
        <p>Expired Date: <?php echo $exp_date;?></p>
    <?php

    if(($exp_date != '' &&  $current_date >= $exp_date) || $current_date < $entry_date )
    {    
        $update_status = mysqli_query($conn , "UPDATE business SET bs_status = 'inactive' where id = $business_id");
    }

    else if(($current_date < $exp_date && $current_date >= $entry_date) || $exp_date == '')
    { 
        $update_status = mysqli_query($conn , "UPDATE business SET bs_status = 'active' where id = $business_id");
    }
   
}

?>