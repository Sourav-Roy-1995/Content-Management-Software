<?php 
    include "auth/auth_admin.php";
    $admin_name =  $_SESSION["name"];
    date_default_timezone_set('Asia/Dhaka');
?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
<!--  meta tags -->
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Content Links</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- fontawesome.min.css -->
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="css/nice-select.css">
<!-- style.css -->
<link rel="stylesheet" href="css/style.css">
<!-- responsive.css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- cross-browser-compatibility -->
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.js"></script>

<!-- Date Format -->
<link rel="stylesheet" href="css/custom_date_picker.css">


</head>

<body>
<!--===============================================
        Start content_area
================================================-->
<header class="header sticky">
<div class="container-fluid">
<div class="row">
    <div class="col-md-5 col-lg-4">
        <div class="logo">
            <figure>
                <a href="dashboard.php"><img src="images/logo.png" alt="" class="img-fluid">Business Management Console </a>
            </figure>
        </div>
    </div>
    <div class="col-md-7 col-lg-8">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link active" href="">All content</a>
            <ul class="dropd">
                <li><a href="dashboard_special_content.php">special content</a></li>
                <li><a href="dashboard.php">normal content</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">write content</a>
            <ul class="dropd">
                <li><a href="write-special-content.php">special content</a></li>
                <li><a href="write-content.php">normal content</a></li>
            </ul>
        </li>

        <?php					   	
        require("connection.php");
        $business_id = $_GET['bs_id'];					
        $result = mysqli_query($conn,"SELECT * FROM business order by id desc limit 1");
        while($row=mysqli_fetch_array($result)){
        $id=$row['id'];

        ?>
        <li class="nav-item">
            <a class="nav-link" href="links.php">links</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="business.php?bs_id=<?php echo $id; ?>">Business</a>
        </li>
        <?php                                  
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="add-form.php">add business</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adduser.php">add user</a>
        </li>
    </ul>
    </div>
</nav>
    <div id="nav-item">
            <a class="nav-link dropdown" href=""><span>hello</span> <?php echo $admin_name; ?> <i class="fa fa-user user"></i></a>
            <div class="logout">
                <ul>
                    <li><a href="#"><i class="fas fa-cogs lgo"></i>setting</a></li>
                    <li><a href="extra_pages.php"><i class="fas fa-users lgo"></i>Teams</a></li>
                    <li><a href="add-package.php"><i class="fas fa-box lgo"></i>Package</a></li>
                    <li><a href="counter-dashboard.php"><i class="fas fa-calculator lgo"></i>Counter</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt lgo"></i>LogOut</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</header>

<!--===============================================
        Start all-content
================================================-->
<section class="all-content">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-3">
        <div class="sidebar-area">
            <div class="sidebar-menu">
                <div class="search-section">
                    <input type="text" id="search_input" placeholder="search">
                </div>
                <!--Get Business Name -->
                <ul id="bs_list">
                <?php
                require("connection.php");        
                $result = mysqli_query($conn, "SELECT * FROM business");
                while($row=mysqli_fetch_array($result)){
                $id=$row['id'];             
                ?>
                <li><a href="business.php?bs_id=<?php echo $id; ?>" ><?php echo $row['name']?></a></li>
                <?php
                }
                ?>   
                </ul> <!--Get Business Name --> 
            </div>
        </div>
    </div>

<?php
session_start();
require("connection.php");
$id=$_GET['id'];

if(isset($id))
{
  $file = $_FILES['file']['name'];


  $readdata= "SELECT * FROM business WHERE id = '$id' "; 
  $queries= mysqli_query($conn,$readdata);
  $queriesarray=mysqli_fetch_array($queries);
  $name=$queriesarray['name'];
  $type=$queriesarray['type'];
  $country=$queriesarray['country'];
  $package=$queriesarray['package'];
  $entry_date=$queriesarray['entry_date'];
  $contact=$queriesarray['contact'];
  $email=$queriesarray['email'];
  $address=$queriesarray['address'];
  $note=$queriesarray['note'];

  $fb_url=$queriesarray['fb_url'];
  $trip_url=$queriesarray['trip_url'];
  $youtube_url=$queriesarray['youtube_url'];
  $twitter_url=$queriesarray['twitter_url'];

  $gplus_url=$queriesarray['gplus_url'];
  $gphoto_url=$queriesarray['gphoto_url'];
  $insta_url=$queriesarray['insta_url'];
  $gbusiness_url=$queriesarray['gbusiness_url'];

  $website_url=$queriesarray['website_url'];
  $prevImg=$queriesarray['file'];
  $bs_status=$queriesarray['bs_status'];
  $expired_date=$queriesarray['expired_date'];
  $team=$queriesarray['team_name'];

  $designer_name=$queriesarray['designer'];
  $writer_name=$queriesarray['writer'];
  $posting_name=$queriesarray['posting'];
  $other_link=$queriesarray['other_link'];
  
  $fb_user_name=$queriesarray['fb_user'];
  $fb_user_pass=$queriesarray['fb_pass'];
  $twitter_user_name=$queriesarray['twitter_user'];
  $twitter_user_pass=$queriesarray['twitter_pass'];

  $insta_user_name=$queriesarray['insta_user'];
  $insta_user_pass=$queriesarray['insta_pass'];
  $email_user_name=$queriesarray['email_user'];
  $email_user_pass=$queriesarray['email_pass'];

}

if (isset($_POST['updatedata'])) {   
  // file file directory
  $target = "files/".basename($_FILES['file']['name']);
  $file = $_FILES['file']['name'];

  // Get file name
  if(!file_exists ($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name']) )
  {
    $file = $prevImg;
    $target = "files/".$prevImg;
  }
    
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $package = mysqli_real_escape_string($conn, $_POST['package']);
  $entry_date = mysqli_real_escape_string($conn, $_POST['entry_date']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $note = mysqli_real_escape_string($conn, $_POST['note']);

  $fb_url = mysqli_real_escape_string($conn, $_POST['fb_url']);
  $trip_url = mysqli_real_escape_string($conn, $_POST['trip_url']);
  $youtube_url = mysqli_real_escape_string($conn, $_POST['youtube_url']);
  $twitter_url = mysqli_real_escape_string($conn, $_POST['twitter_url']);
  $gplus_url = mysqli_real_escape_string($conn, $_POST['gplus_url']);
  $gphoto_url = mysqli_real_escape_string($conn, $_POST['gphoto_url']);
  $insta_url = mysqli_real_escape_string($conn, $_POST['insta_url']);
 

  $gbusiness_url = mysqli_real_escape_string($conn, $_POST['gbusiness_url']);
  $website_url = mysqli_real_escape_string($conn, $_POST['website_url']);

  $expired_date = mysqli_real_escape_string($conn, $_POST['expired_date']);
  $bs_status = mysqli_real_escape_string($conn, $_POST['bs_status']);
  $team = mysqli_real_escape_string($conn, $_POST['team_name']);
  $designer_name = mysqli_real_escape_string($conn, $_POST['designer']);
  $writer_name = mysqli_real_escape_string($conn, $_POST['writer']);
  $posting_name = mysqli_real_escape_string($conn, $_POST['posting']);
  $other_link = mysqli_real_escape_string($conn, $_POST['other_link']);
  
  
  $fb_user_name = mysqli_real_escape_string($conn, $_POST['fb_user']);
  $fb_user_pass = mysqli_real_escape_string($conn, $_POST['fb_pass']);
  $twitter_user_name = mysqli_real_escape_string($conn, $_POST['twitter_user']);
  $twitter_user_pass = mysqli_real_escape_string($conn, $_POST['twitter_pass']);
 
  $insta_user_name = mysqli_real_escape_string($conn, $_POST['insta_user']);
  $insta_user_pass = mysqli_real_escape_string($conn, $_POST['insta_pass']);
  $email_user_name = mysqli_real_escape_string($conn, $_POST['email_user']);
  $email_user_pass = mysqli_real_escape_string($conn, $_POST['email_pass']);
  

  $upquery="UPDATE business SET  name='$name',type='$type',country='$country',package='$package',entry_date='$entry_date',contact='$contact',email='$email',address='$address',note='$note', 
  fb_url='$fb_url',trip_url='$trip_url',youtube_url='$youtube_url',twitter_url='$twitter_url',
  gplus_url='$gplus_url', gphoto_url='$gphoto_url',insta_url='$insta_url',

  gbusiness_url='$gbusiness_url',website_url='$website_url',file='$file',bs_status='$bs_status',expired_date='$expired_date',
  team_name='$team', designer='$designer_name',writer='$writer_name', posting='$posting_name',other_link='$other_link',
  
  fb_user='$fb_user_name', fb_pass='$fb_user_pass',twitter_user='$twitter_user_name', twitter_pass='$twitter_user_pass',
  insta_user='$insta_user_name',insta_pass='$insta_user_pass',email_user='$email_user_name', email_pass='$email_user_pass'
  
  WHERE id=  '".$id."'"  ;


      // execute query
      mysqli_query($conn, $upquery);
      $result = mysqli_query($conn, "SELECT * FROM business");
      $row = mysqli_fetch_array($result);
  
      if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
          ?>
          <script>alert("Successfully Submitted");
          window.location.href="business.php?bs_id=<?php echo $id;?>";</script>
         <?php
      }

      if ($row) {
        ?>
        <script>alert("Successfully Submitted");
        window.location.href="business.php?bs_id=<?php echo $id;?>";</script>
       <?php
    }
}
?>


    <div class="col-lg-9 content-top">
        <div class="content-update" style="padding-bottom: 20px">
            <h2 >Business Details</h2>

            <form action="#" method="POST" enctype="multipart/form-data">	

            <button type="submit" class="btn btn-info btn-sm custom-btn" name="updatedata" >Update</button>
            <div class="business-into d-flex">
                <div class="form_area">
			  
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="custom-label">Business Name</label>
                                <input type="text" class="form-control custom-input" name="name" value="<?php echo $name;?>" placeholder="Business Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="custom-label">Type Of Business</label>
                                <input type="text" class="form-control custom-input" name="type" value="<?php echo $type;?>" placeholder="Type Of Business">
                            </div>
                            
                            <div class="form-group col-md-5 package-area">
                                    <label class="custom-label">Country</label>
                                    <?php         
                                    session_start();                     
                                    require("connection.php");               
                                    $sql="SELECT * FROM country";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                    ?>
                                    <select name="country" class="custom-input"> 

                                    <option value="<?php echo $country;?>" selected><?php echo $country;?></option>  

                                    <?php while($row=mysqli_fetch_array($result)):;?>
                                    <option><?php echo $row['country_type'];?></option>
                                    <?php endwhile;?>
                                    </select>
                                    <?php 
                                    }                    
                                    ?>
                             </div>

                            <div class="form-group col-md-3 package-area">
                                    <label class="custom-label">Package</label>
                                    <?php         
                                    session_start();                     
                                    require("connection.php");               
                                    $sql="SELECT * FROM package ";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                    ?>
                                    <select name="package" class="custom-input"> 

                                    <option value="<?php echo $package;?>" selected><?php echo $package;?></option>  

                                    <?php while($row=mysqli_fetch_array($result)):;?>
                                    <option><?php echo $row['package_type'];?></option>
                                    <?php endwhile;?>
                                    </select>
                                    <?php 
                                    }                    
                                    ?>
                             </div>

                            <div class="form-group col-md-4">
                                 <label class="custom-label">Entry Date</label>
                                 <input type="text" class="form-control custom-input" id="date" name="entry_date" value="<?php echo $entry_date;?>" placeholder="Entry Date">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="custom-label">Contact</label>
                                <input type="text" class="form-control custom-input" name="contact" value="<?php echo $contact;?>" placeholder="Contact">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="custom-label">Email</label>
                                <input type="text" class="form-control custom-input" name="email" value="<?php echo $email;?>" placeholder="Email">
                            </div>

                            <div class="form-group col-md-12">
                                 <label class="custom-label">Address</label>
                                 <input type="text" class="form-control custom-input" name="address" value="<?php echo $address;?>" placeholder="Address">
                            </div>

                            <div class="form-group col-md-12">
                                 <label class="custom-label">Note</label>
                                 <input type="text" class="form-control custom-input" name="note" value="<?php echo $note;?>" placeholder="Note">
                            </div>
                        </div>
                    <h2>Others Details</h2>
                <div class="business-into-one">
                        <div class="form-row">
                            <div class="col-lg-12">
                                
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="custom-label">Facebook Url</label>
                                    <input type="text" class="form-control custom-input-other" name="fb_url" value="<?php echo $fb_url;?>" placeholder="Facebook Url">
                                </div>
                                <div class="col-lg-4">
                                    <label class="custom-label">Trip Advisor Url</label>
                                    <input type="text" class="form-control custom-input-other" name="trip_url" value="<?php echo $trip_url;?>" placeholder="Trip Advisor Url">
                                </div>
                                <div class="col-lg-4">
                                    <label class="custom-label">Youtube Url</label>
                                    <input type="text" class="form-control custom-input-other" name="youtube_url" value="<?php echo $youtube_url;?>" placeholder="Youtube Url">
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col-lg-4">
                                     <label class="custom-label">Twitter Url</label>
                                     <input type="text" class="form-control custom-input-other" name="twitter_url" value="<?php echo $twitter_url;?>" placeholder="Twitter Url">
                                 </div>
                                 <div class="col-lg-4">
                                     <label class="custom-label">Google Plus Url</label>
                                     <input type="text" class="form-control custom-input-other" name="gplus_url" value="<?php echo $gplus_url;?>" placeholder="Google Plus Url">
                                 </div>
                                 <div class="col-lg-4">
                                    <label class="custom-label">Google Photo Url</label>
                                    <input type="text" class="form-control custom-input-other" name="gphoto_url" value="<?php echo $gphoto_url;?>" placeholder="Google Photo Url">
                                 </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="custom-label">Instagram Url</label>
                                    <input type="text" class="form-control custom-input-other" name="insta_url" value="<?php echo $insta_url;?>" placeholder="Instagram Url">
                                </div>
                                <div class="col-lg-4">
                                    <label class="custom-label">Google Business Url</label>
                                    <input type="text" class="form-control custom-input-other" name="gbusiness_url" value="<?php echo $gbusiness_url;?>" placeholder="Google Business Url">
                                </div>
                                <div class="col-lg-4">           
                                    <label class="custom-label">Website Url</label>
                                    <input type="text" class="form-control custom-input-other" name="website_url" value="<?php echo $website_url;?>" placeholder="Website Url">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="custom-label">Facebook Username</label>
                                    <input type="text" class="form-control custom-input-other" name="fb_user" value="<?php echo $fb_user_name;?>" placeholder="Facebook Username" >
                                </div>
                                <div class="col-lg-4">
                                     <label class="custom-label">Facebook Password</label>
                                    <input type="text" class="form-control custom-input-other" name="fb_pass" value="<?php echo $fb_user_pass;?>" placeholder="Facebook Password">
                                </div>
                                <div class="col-lg-4">   
                                    <label class="custom-label">Twitter Username</label>
                                    <input type="text" class="form-control custom-input-other" name="twitter_user" value="<?php echo $twitter_user_name;?>" placeholder="Twitter Username">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="custom-label">Twitter Password</label>
                                    <input type="text" class="form-control custom-input-other" name="twitter_pass" value="<?php echo $twitter_user_pass;?>" placeholder="Twitter Password">
                                </div>
                                <div class="col-lg-4">
                                    <label class="custom-label">Instagram Username</label>
                                    <input type="text" class="form-control custom-input-other" name="insta_user" value="<?php echo $insta_user_name;?>" placeholder="Instagram Username">
                                </div>
                                <div class="col-lg-4">
                                    <label class="custom-label">Instagram Password</label>                          
                                    <input type="text" class="form-control custom-input-other" name="insta_pass" value="<?php echo $insta_user_pass;?>" placeholder="Instagram Password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="custom-label">Email Username</label>
                                    <input type="text" class="form-control custom-input-other" name="email_user" value="<?php echo $email_user_name;?>" placeholder="Email Username">
                                </div>
                                <div class="col-lg-6">
                                    <label class="custom-label">Email Password</label>
                                    <input type="text" class="form-control custom-input-other" name="email_pass" value="<?php echo $email_user_pass;?>" placeholder="Email Password">
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group assign-update" style="padding: 0px;">
                                        <h5 for="inputPassword4">Note</h5>
                                        <textarea class="note" placeholder="Others links" name="other_link" rows="3" ><?php echo $other_link;?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                         </div>
                        </div>
                </div>
                </div>
                <div class="item-activate">

                    <figure>
                       <?php 
                            echo '<img src = "files/'.$prevImg.'" alt="" class="img-fluid" id="profile-img-tag">';
                        ?>
                    </figure>
                    <input id="profile-img" type="file" name="file">

                    <label class="custom-label-other">Expired Date</label>
                    <input type="text" class="form-control custom-input" name="expired_date" id="date2" value="<?php echo $expired_date;?>">

                    <label class="custom-label-other">Status</label>
                    <select name="bs_status" id="" class="custom-input">
                        <option value="<?php echo $bs_status;?>" selected><?php echo $bs_status;?></option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    
                    <h3 style="margin-top: 69px;">Assign</h3>

                    <div class="assign-update">
                        <h5>Team</h5>

                        <?php         
                        session_start();                     
                        require("connection.php");               
                        $sql="SELECT * FROM team ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                        ?>
                        <select name="team_name" > 

                        <option value="<?php echo $team;?>" selected><?php echo $team;?></option>  

                        <?php while($row=mysqli_fetch_array($result)):;?>
                        <option><?php echo $row['team_name'];?></option>
                        <?php endwhile;?>
                        </select>
                        <?php 
                        }                    
                        ?>
                    </div>

                    <div class="assign-update">

                        <h5>Designer</h5>

                        <?php         
                        session_start();                     
                        require("connection.php");           
                        $designer = "designer";
                        $sql="SELECT * FROM user WHERE role= '$designer' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                        ?>
                        <select name="designer" >    
                        
                        <option value="<?php echo $designer_name;?>" selected><?php echo $designer_name;?></option>  
                        
                        <?php while($row=mysqli_fetch_array($result)):;?>
                        <option><?php echo $row['name'];?></option>
                        <?php endwhile;?>
                        </select>   
                        <?php 
                        }                    
                        ?>
                    </div>

                    <div class="assign-update">
                        
                        <h5>Writer</h5>

                        <?php         
                        session_start();                     
                        require("connection.php");           
                        $writer = "writer";
                        $sql="SELECT * FROM user WHERE role= '$writer' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                        ?>
                        <select name="writer" >    

                        <option value="<?php echo $writer_name;?>" selected><?php echo $writer_name;?></option>  

                        <?php while($row=mysqli_fetch_array($result)):;?>
                        <option><?php echo $row['name'];?></option>
                        <?php endwhile;?>
                        </select>
                        <?php 
                        }                    
                        ?>
                    </div>

                    <div class="assign-update">
                        
                        <h5>Posting Assistant</h5>

                        <?php         
                        session_start();                     
                        require("connection.php");           
                        $posting = "posting";
                        $sql="SELECT * FROM user WHERE role= '$posting' ";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                        ?>
                        <select name="posting" >

                        <option value="<?php echo $posting_name;?>" selected><?php echo $posting_name;?></option> 

                        <?php while($row=mysqli_fetch_array($result)):;?>
                        <option><?php echo $row['name'];?></option>
                        <?php endwhile;?>
                        </select>
                        <?php 
                        }                    
                        ?>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


<!--All JavaScript Plugin-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<!-- main.js -->
<script src="js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Date Picker -->
<script src="js/custom_date_picker.js"></script>


<!-- Search -->
<script>
$(document).ready(function(){
$("#search_input").on("keyup", function() {
var value = $(this).val().toLowerCase();
$("#bs_list li a").filter(function() {
$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
});
});
});
</script> 
<!-- Search -->

<!-- Image Show After Select From File Input --> 
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
</script>


<!-- date picker -->
<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'dd-mm-yy'   
           });  
           $(function(){  
                $("#date,#date2").datepicker();  
           });  
             
      });  
    </script> 
<!-- date picker -->

</body>

</html>