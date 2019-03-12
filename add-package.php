<?php 
    include "auth/auth_admin.php";
    $admin_name =  $_SESSION["name"];
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
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
                            <!--Get Package Name -->
                            <ul id="bs_list" class="custom_list">
                            <?php
                            require("connection.php");         
                            $result = mysqli_query($conn, "SELECT * FROM package order by package_type");
                            while($row=mysqli_fetch_array($result)){
                            $id=$row['id'];             
                            ?>
                            <li id="<?php echo $row['id']; ?>">
                                <a href="#" class="sourcelink" id="bs-link" data-role="update" data-id="<?php echo $row['id'] ;?>" data-target="package_type"><?php echo $row['package_type']?></a>
                            </li>
                            <?php
                            }
                            ?>   
                            </ul> <!--Get Package Name --> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" id="adduser">
                    <div class="content-update">

                        <div class="add-user">
                            <h2>Add Package</h2>
                            <form action="add_package_system.php" method="POST" class="user-add">
                            
                                <div class="col-md-12">
                                    <div class="msg"></div>
                                </div>

                                <div class="form-group">
                                     <input name="package_type" type="text" class="form-control" id="select"  required>
                                </div>

                                <button name="add" type="submit" value="Add" class="btn btn-info">Add</button>

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--Edit Modal -->
<div id="myModal" class="modal fade" role="dialog" style="width:100%">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Package Details</h5>
</div>
<div class="modal-body">
    <div class="form-group">
        <label>Type</label>
        <input type="text" id="package_type" class="form-control">
    </div>

    <input type="hidden" id="packageId" class="form-control">
</div>
<div class="modal-footer">
<a href="#" id="update" class="btn btn-info pull-right">Update</a>
<a href="#" id="delete" class="btn btn-info pull-right">Delete</a>
<button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
<!-- Edit Modal -->


    <!--All JavaScript Plugin-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <!-- main.js -->
    <script src="js/custom.js"></script>



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



<!--Edit Modal View -->
<script>
$(document).ready(function(){

//  append values in input fields
$(document).on('click','a[data-role=update]',function(){
var id  = $(this).data('id');
var package_type  = $('#'+id).children('a[data-target=package_type]').text();


$('#package_type').val(package_type);
$('#packageId').val(id);
$('#myModal').modal('toggle');
});

// now create event to get data from fields and update in database 

$('#update').click(function(){
var id  = $('#packageId').val(); 
var package_type =  $('#package_type').val();


$.ajax({
    url      : 'edit_package.php',
    method   : 'post', 
    data     : {package_type : package_type , id: id},
    success  : function(response){
// now update user record in table 
    $('#'+id).children('a[data-target=package_type]').text(package_type);
    $('#myModal').modal('toggle'); 

}
});
});


$('#delete').click(function(){
var id  = $('#packageId').val(); 

$.ajax({
    url      : 'delete-package.php',
    method   : 'POST', 
    data     : {id: id},
    success  : function(response){
// now update user record in table 
    
    $('#myModal').modal('toggle'); 

}
});
});


});
</script>
<!--Edit Modal View -->

</body>

</html>