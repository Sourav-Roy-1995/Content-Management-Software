<?php 
    include "auth/auth_admin.php";
    $admin_name =  $_SESSION["name"];
    date_default_timezone_set('Asia/Dhaka');
?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
<!-- Required meta tags -->
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
<!-- style.css -->
<link rel="stylesheet" href="css/style.css">
<!-- responsive.css -->
<link rel="stylesheet" href="css/responsive.css">
<!-- cross-browser-compatibility -->
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.js"></script>


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
                <li><a href="dashboard.php">regular content</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">write content</a>
            <ul class="dropd">
                <li><a href="write-special-content.php">special content</a></li>
                <li><a href="write-content.php">regular content</a></li>
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
                    <li><a href="add_country.php"><i class="fas fa-globe lgo"></i>Country</a></li>
                    <li><a href="counter-dashboard.php"><i class="fas fa-calculator lgo"></i>Counter</a></li>
                    <li><a href="all_business.php"><i class="fas fa-archive lgo"></i>All Business</a></li>
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
                <div class="search-section custom_sidebar">
                    <input type="text" id="search_input" placeholder="search">
                </div>
                <!--Get Business Name -->
                <ul id="bs_list" class="custom_list">
                <?php
                require("connection.php");        
                $result = mysqli_query($conn, "SELECT * FROM business order by name");
                while($row=mysqli_fetch_array($result)){
                $id=$row['id'];             
                ?>
                <li>
                    <a href="business.php?bs_id=<?php echo $id;?>" ><?php echo $row['name']?></a>
                </li>
                <?php
                }
                ?>   
                </ul> <!--Get Business Name --> 
            </div>
        </div>
    </div>
    <div class="col-lg-9 content-top">
        <div class="content-update">
            <h2>Business Details</h2>
            <?php					   	
                require("connection.php");
                $business_id = $_GET['bs_id'];					
                $result = mysqli_query($conn,"SELECT * FROM business WHERE id= '".$business_id."'");
                while($row=mysqli_fetch_array($result)){
                $id=$row['id'];
            ?>	
            <a href="edit_business.php?id=<?php echo $id;?>" class="edit btn btn-info">Edit</a> 
            
            <div class="business-into d-flex">
                <div class="form_area">
                    <form>				  
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Business Details</label>
                                <p><?php echo $row['name']?></p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Type of Business</label>
                                <p><?php echo $row['type']?></p>
                            </div>
                            
                            <div class="form-group col-md-5">
                                <label for="inputEmail4">Country</label>
                                <p><?php echo $row['country']?></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Package</label>
                                <p><?php echo $row['package']?></p>
                            </div>

                            
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Entry Date</label>
                                <p><?php echo $row['entry_date']?></p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Contact Details</label>
                                <p><?php echo $row['contact']?></p>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <p><?php echo $row['email']?></p>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Address</label>
                                <p><?php echo $row['address']?></p>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Note</label>
                                <p class="note"><?php echo $row['note']?></p>
                            </div>
                        </div>
                    </form>
                    <h2>Others Details</h2>
                <div class="business-into-one">
                    <form>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <a href="<?php echo $row['fb_url']?>" class="btn btn-primary" target="_blank">Facebook</a>
                                <a href="<?php echo $row['trip_url']?>" class="btn btn-primary" target="_blank">TripAdviosr</a>
                                <a href="<?php echo $row['youtube_url']?>" class="btn btn-primary" target="_blank">Youtube</a>
                                <a href="<?php echo $row['twitter_url']?>" class="btn btn-primary" target="_blank">Twitter</a>
                                <a href="<?php echo $row['gplus_url']?>" class="btn btn-primary" target="_blank">Google Plus</a>
                                <a href="<?php echo $row['gphoto_url']?>" class="btn btn-primary" target="_blank">Google photo</a>
                                <a href="<?php echo $row['insta_url']?>" class="btn btn-primary" target="_blank">Instagram</a>
                                <a href="<?php echo $row['gbusiness_url']?>" class="btn btn-primary" target="_blank">Google Business</a>
                                <a href="<?php echo $row['website_url']?>" class="btn btn-primary" target="_blank">Website</a>
                            </div>
                            <!--  <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="inputPassword4">Note</label>
                                    <textarea></textarea>
                                </div>
                            </div> -->

                            <div class="form-group col-md-11 assign-update">
                                <h5 for="inputPassword4">Other Links</h5>
                                <textarea class="note" readonly><?php echo $row['other_link']?></textarea>
                            </div>
                            
                             <div class="site-url">
                               
                                <input type="hidden" name="fb_user" placeholder="Facebook Username" value="<?php echo $row['fb_user']?>">

                                <input type="hidden" name="fb_pass" placeholder="Facebook Password" value="<?php echo $row['fb_pass']?>">
                                
                                <input type="hidden" name="twitter_user" placeholder="Twitter Username" value="<?php echo $row['twitter_user']?>">

                                <input type="hidden" name="twitter_pass" placeholder="Twitter Password" value="<?php echo $row['twitter_pass']?>">
                                
                                <input type="hidden" name="insta_user" placeholder="Instagram Username" value="<?php echo $row['insta_user']?>">

                                <input type="hidden" name="insta_pass" placeholder="Instagram Password" value="<?php echo $row['insta_pass']?>">
                               
                                <input type="hidden" name="email_user" placeholder="Email Username" value="<?php echo $row['email_user']?>">

                                <input type="hidden" name="email_pass" placeholder="Email Password" value="<?php echo $row['email_pass']?>">

                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class="item-activate">
                    <figure>
                        <?php 
                            echo '<img src = "files/'.$row['file'].'" alt="" class="img-fluid">';
                        ?>
                    </figure>
                    <!-- <a href="" class="btn btn-primary exp-btn">Expired</a> -->
                    <small value="<?php echo $row['expired_date']?>"><?php echo $row['expired_date']?></small>
                    <a href="" class="btn btn-secondary active-btn">Active</a>

                    <div class="assign-update">
                        <h5>Status</h5>
                        <p id="bs_status"><?php echo $row['bs_status']?></p>
                    </div>

                    <h3>Assign</h3>

                    <div class="assign-update">
                        <h5>Team</h5>
                        <p><?php echo $row['team_name']?></p>
                    </div>

                    <div class="assign-update">
                        <h5>Designer</h5>
                        <p><?php echo $row['designer']?></p>
                    </div>
                    <div class="assign-update">
                        <h5>Campaign Coord</h5>
                        <p><?php echo $row['writer']?></p>
                    </div>
                    <div class="assign-update">
                        <h5>Posting Assistant</h5>
                        <p><?php echo $row['posting']?></p>
                    </div>

                    <?php                                  
                    }
                    ?><!-- End Fetch Business Details -->
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


<!-- Active Deactive Business Control -->
<script >
window.onload = function date_range(){

entry_date  = '<?php  
require("connection.php");
$business_id = $_GET['bs_id'];									
$result = mysqli_query($conn,"SELECT * FROM business WHERE id= '".$business_id."' ");
while($row=mysqli_fetch_array($result)){
   echo strtotime($row['entry_date']);     
}
?>';    

current_date  = '<?php echo strtotime(date("d-m-Y")) ?>';

exp_date  = '<?php  
require("connection.php");
$business_id = $_GET['bs_id'];					
$result = mysqli_query($conn,"SELECT * FROM business WHERE id= '".$business_id."' ");
while($row=mysqli_fetch_array($result)){
    echo strtotime($row['expired_date']);              
}
?>';

if(( exp_date != '' &&  current_date >= exp_date) || current_date < entry_date )
{

$(".active-btn").removeClass('btn btn-secondary btn-block').addClass('btn btn-primary btn-block').html('Inactive');
    
}

else if((current_date < exp_date && current_date >= entry_date) || exp_date == '')
{ 

$(".active-btn").removeClass('btn btn-primary btn-block').addClass('btn btn-secondary btn-block').html('Active');

}

}
</script>

<!-- Active Deactive Business Control -->

</body>

</html>