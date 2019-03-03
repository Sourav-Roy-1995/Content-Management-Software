<?php 
    include "auth/auth_admin.php";
?>
<?php
  // Create database connection                          
    require("connection.php");

  // Initialize message variable
  $msg = "";

  $name = mysqli_real_escape_string($conn, $_POST['name']);
        
  //check if business exists
  $check=mysqli_query($conn,"select * from business where name='$name' ");
  $checkrows=mysqli_num_rows($check);

  if($checkrows>0) {
      
      ?>
          <script>alert("business name exists");
          window.location.href="add-form.php";</script>
      <?php
   } //check if user exists


  // If upload button is clicked ...

  else 

  {

  if (isset($_POST['add_business'])) {
      
     // file file directory
    $target = "files/".basename($_FILES['file']['name']);
    
    // Get file name
    $file = $_FILES['file']['name'];

    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $entry_date = mysqli_real_escape_string($conn, $_POST['entry_date']);
    $package = mysqli_real_escape_string($conn, $_POST['package']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $expired_date = mysqli_real_escape_string($conn, $_POST['expired_date']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $fb_url = mysqli_real_escape_string($conn, $_POST['fb_url']);
    $fb_user = mysqli_real_escape_string($conn, $_POST['fb_user']);
    $fb_pass = mysqli_real_escape_string($conn, $_POST['fb_pass']);
    $twitter_url = mysqli_real_escape_string($conn, $_POST['twitter_url']);
    $twitter_user = mysqli_real_escape_string($conn, $_POST['twitter_user']);
    $twitter_pass = mysqli_real_escape_string($conn, $_POST['twitter_pass']);
    $insta_url = mysqli_real_escape_string($conn, $_POST['insta_url']);
    $insta_user = mysqli_real_escape_string($conn, $_POST['insta_user']);
    $insta_pass = mysqli_real_escape_string($conn, $_POST['insta_pass']);
    $trip_url = mysqli_real_escape_string($conn, $_POST['trip_url']);
    $gplus_url = mysqli_real_escape_string($conn, $_POST['gplus_url']);
    $gbusiness_url = mysqli_real_escape_string($conn, $_POST['gbusiness_url']);
    $youtube_url = mysqli_real_escape_string($conn, $_POST['youtube_url']);
    $gphoto_url = mysqli_real_escape_string($conn, $_POST['gphoto_url']);
    $website_url = mysqli_real_escape_string($conn, $_POST['website_url']);
    $email_user = mysqli_real_escape_string($conn, $_POST['email_user']);
    $email_pass = mysqli_real_escape_string($conn, $_POST['email_pass']);
    $bs_status = mysqli_real_escape_string($conn, $_POST['bs_status']);
    $team_name = mysqli_real_escape_string($conn, $_POST['team_name']);
    $designer = mysqli_real_escape_string($conn, $_POST['designer']);
    $writer = mysqli_real_escape_string($conn, $_POST['writer']);
    $posting = mysqli_real_escape_string($conn, $_POST['posting']);
    $other_link = mysqli_real_escape_string($conn, $_POST['other_link']);

    $sql = "INSERT INTO business (name,type,country,entry_date,package,address,contact,email,expired_date,note,fb_url,fb_user,fb_pass,twitter_url,twitter_user,twitter_pass,insta_url,insta_user,insta_pass,trip_url,gplus_url,gbusiness_url,youtube_url,gphoto_url,website_url,email_user,email_pass,file,bs_status,team_name,designer,writer,posting,other_link) VALUES ('$name', '$type', '$country', '$entry_date', '$package', '$address','$contact','$email','$expired_date','$note','$fb_url','$fb_user','$fb_pass','$twitter_url','$twitter_user','$twitter_pass','$insta_url','$insta_user','$insta_pass','$trip_url','$gplus_url','$gbusiness_url','$youtube_url','$gphoto_url','$website_url','$email_user','$email_pass','$file','$bs_status','$team_name','$designer','$writer','$posting','$other_link')";
    

    // execute query
    $retval = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, "SELECT * FROM business");
    $row = mysqli_fetch_array($result);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target) || $retval) {
        ?>
        <script>alert("Successfully Submitted");
        window.location.href="add-form.php";</script>
       <?php
    }


    else{
        $msg = "Failed to upload file";
    }
  }

}




?>