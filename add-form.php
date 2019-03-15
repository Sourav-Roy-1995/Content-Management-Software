<?php
    include "auth/auth_admin.php";
?>

<?php 
    $admin_name =  $_SESSION["name"];
?>

<?php  
    require("connection.php"); 
?>  


<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
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
                            <ul id="bs_list" class="custom_list">
                            <?php
                            require("connection.php");        
                            $result = mysqli_query($conn, "SELECT * FROM business order by name");
                            while($row=mysqli_fetch_array($result)){
                            $id=$row['id'];             
                            ?>
                                <li><a href="business.php?bs_id=<?php echo $id; ?>" class="sourcelink"><?php echo $row['name']?></a></li>
                            <?php
                            }
                            ?>   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 content-top">
                    <div class="content-update">
                        <h2>Add Business Details</h2>
                        <form action="add_business_system.php" method="POST" enctype="multipart/form-data">
                        <button type="submit" name="add_business" class="edit btn btn-info custom-btn">Save</button>
                        <div class="business-into d-flex">
                            <div class="form_area">
                                    <div class="form-row form-active">
                                        <div class="form-group col-md-8">
                                            <input type="text" class="form-control" name="name" placeholder="Business Name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" name="type" class="form-control" placeholder="Type Of Business" required>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <div class="package-area">
                                                <?php         
                                                session_start();                     
                                                require("connection.php");               
                                                $sql="SELECT * FROM country ";
                                                $result = mysqli_query($conn, $sql);
                                                if(mysqli_num_rows($result) > 0){
                                                ?>
                                                <select name="country" id="" >    
                                                <option selected value="">Country:</option>
                                                <?php while($row=mysqli_fetch_array($result)):;?>
                                                <option><?php echo $row['country_type'];?></option>
                                                <?php endwhile;?>
                                                </select>
                                                <?php 
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <input type="text" name="entry_date" class="form-control" id="date" placeholder="Entry Date" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="package-area">
                                                <?php         
                                                session_start();                     
                                                require("connection.php");               
                                                $sql="SELECT * FROM package ";
                                                $result = mysqli_query($conn, $sql);
                                                if(mysqli_num_rows($result) > 0){
                                                ?>
                                                <select name="package" id="" >    
                                                <option selected value="">Package:</option>

                                                <?php while($row=mysqli_fetch_array($result)):;?>
                                                <option><?php echo $row['package_type'];?></option>
                                                <?php endwhile;?>
                                                </select>
                                                <?php 
                                                } 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="address" placeholder="Address" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" name="contact" class="form-control" placeholder="Contact" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" name="email" class="form-control" placeholder="Email" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="text" name="expired_date" class="form-control" id="date2" placeholder="Expired Date" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" name="note" class="form-control" placeholder="Note" >
                                        </div>
                                    </div>
                               
                                <div class="content-update-link">
                                    <h2>Others Details</h2>
                                    <div class="business-into-one">
                                            <div class="form-row">
                                                <div class="col-lg-12">
                                                    <div class="site-url">
                                                        <input type="text" name="fb_url" placeholder="Facebook URL" >
                                                        <input type="text" name="fb_user" placeholder="Facebook Username" >
                                                        <input type="text" name="fb_pass" placeholder="Facebook Password" >
                                                        <input type="text" name="twitter_url" placeholder="Twitter URL" >
                                                        <input type="text" name="twitter_user" placeholder="Twitter Username" >
                                                        <input type="text" name="twitter_pass" placeholder="Twitter Password" >
                                                        <input type="text" name="insta_url" placeholder="Instagram URL" >
                                                        <input type="text" name="insta_user" placeholder="Instagram Username" >
                                                        <input type="text" name="insta_pass" placeholder="Instagram Password" >
                                                        <input type="text" name="trip_url" placeholder="TripAdviosr URL" >
                                                        <input type="text" name="gplus_url" placeholder="Google Plus URL" >
                                                        <input type="text" name="gbusiness_url" placeholder="Google Business URL" >
                
                                                        <input type="text" name="youtube_url" placeholder="Youtube URL" >

                                                        <input type="text" name="gphoto_url" placeholder="Google Photo URL" >
                                                        <input type="text" name="website_url" placeholder="Website URL" >
                                                        <input type="text" name="email_user" placeholder="Email Username" >
                                                        <input type="password" name="email_pass" placeholder="Email Password" >
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-activate">
                                <figure>
                                    <img alt="" class="img-fluid" id="profile-img-tag">
                                </figure>
                                <input id="profile-img" type="file" name="file">

                                <div class="assign_area">
                                    <select name="bs_status" id="" >
                                        <option value="" selected>STATUS</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>

                                    <div class="assign-area">
                                        <h3>Assign</h3>
                                    
                                        <?php         
                                        session_start();                     
                                        require("connection.php");               
                                        $sql="SELECT * FROM team ";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <select name="team_name" >    
                                        <option selected value="">Team:</option>
                                        <?php while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row['team_name'];?></option>
                                        <?php endwhile;?>
                                        </select>
                                        <?php 
                                        }                    
                                        ?>

                                        <?php         
                                        session_start();                     
                                        require("connection.php");           
                                        $designer = "designer";
                                        $sql="SELECT * FROM user WHERE role= '$designer' ";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <select name="designer" >    
                                        <option selected value="">Designer:</option>        
                                        <?php while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row['name'];?></option>
                                        <?php endwhile;?>
                                        </select>   
                                        <?php 
                                        }                    
                                        ?>

                                        <?php         
                                        session_start();                     
                                        require("connection.php");           
                                        $writer = "writer";
                                        $sql="SELECT * FROM user WHERE role= '$writer' ";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <select name="writer">    
                                        <option selected value="">campaign coord.:</option>
                                        <?php while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row['name'];?></option>
                                        <?php endwhile;?>
                                        </select>
                                        <?php 
                                        }                    
                                        ?>


                                        <?php         
                                        session_start();                     
                                        require("connection.php");           
                                        $posting = "posting";
                                        $sql="SELECT * FROM user WHERE role= '$posting' ";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <select name="posting">    
                                        <option selected value="">Posting Assistant:</option>
                                        <?php while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row['name'];?></option>
                                        <?php endwhile;?>
                                        </select>
                                        <?php 
                                        }                    
                                        ?>

                                    </div>
                                    <textarea placeholder="Others links" name="other_link" ></textarea>

                                    </form>
                                </div>
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