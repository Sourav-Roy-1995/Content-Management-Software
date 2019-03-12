<?php 
    include "auth/auth_admin.php";
    $admin_name =  $_SESSION["name"];
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
                            <!--Get User Name -->
                            <ul id="bs_list" class="custom_list">
                                <?php
                                require("connection.php");        
                                $result = mysqli_query($conn, "SELECT * FROM user order by name");
                                while($row=mysqli_fetch_array($result)){
                                $id=$row['id'];             
                                ?>
                                <li id="<?php echo $row['id']; ?>">
                                    <a href="#" class="sourcelink" id="bs-link" data-role="update" data-id="<?php echo $row['id'] ;?>" data-target="name"><?php echo $row['name']?>
                                    </a>

                                    <a href="#" class="sourcelink d-none" id="bs-link" data-role="update" data-id="<?php echo $row['id'] ;?>" data-target="email"><?php echo $row['email']?></a>

                                    <a href="#" class="sourcelink d-none" id="bs-link" data-role="update" data-id="<?php echo $row['id'] ;?>" data-target="team_name"><?php echo $row['team_name']?>
                                    </a>

                                    <a href="#" class="sourcelink d-none" id="bs-link" data-role="update" data-id="<?php echo $row['id'] ;?>" data-target="role"><?php echo $row['role']?>
                                    </a>

                                    <a href="#" class="sourcelink d-none" id="bs-link" data-role="password" data-id="<?php echo $row['id'] ;?>" data-target="password"><?php echo $row['password']?>
                                    </a>


                                </li> 
                                <?php
                                }
                                ?>   
                            </ul> <!--Get User Name --> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" id="adduser">
                    <div class="content-update">

                        <div class="add-user">
                            <h2>Add New User</h2>
                            <form action="registration_system.php" method="POST" class="user-add">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                        <?php         
                                        session_start();                         
                                        require("connection.php");               
                                        $sql="SELECT * FROM team ";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <select name="team_name" id="select">    
                                        <option selected value="">Team:</option>
                                        <?php while($row=mysqli_fetch_array($result)):;?>
                                        <option><?php echo $row['team_name'];?></option>
                                        <?php endwhile;?>
                                        </select>
                                        <?php 
                                        }                    
                                        ?>
                                </div>

                                <div class="form-group">
                                    <select name="role" id="select" required>
                                        <option selected value="">Choose Role...</option>
                                        <option value="admin">admin</option>
                                        <option value="designer">designer</option>
                                        <option value="writer">writer</option>
                                        <option value="posting">posting</option>
                                        <option value="guestrelation">Guest Relation Manager</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                                </div>

                                <button name="signup" type="submit" value="Register" class="btn btn-info">Register</button>
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
<h5 class="modal-title" id="exampleModalLabel">User Details</h5>
</div>
<div class="modal-body">
    <div class="form-group">
        <label>Name</label>
        <input type="text" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label>Team</label>
        <input type="text" id="team_name" class="form-control">
    </div>

    <div class="form-group">
        <label>Role</label>
        <input type="text" id="role" class="form-control">
    </div> 

    <input type="hidden" id="userId" class="form-control">
    
</div>

<div class="modal-footer" >
<a href="#" id="update" class="btn btn-info pull-right">Update</a>

<a href="#" id="updatepass" class="btn btn-info pull-right">Edit Password</a>

<a href="#" id="delete" class="btn btn-info pull-right">Delete</a>

<button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
<!-- Edit Modal -->


<!--Password Modal -->
<div id="PasswordModal" class="modal fade" role="dialog" style="width:100%">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">User Details</h5>
</div>
<div class="modal-body">
    <div class="form-group">
        <label>Password</label>
        <input type="password" id="updatepassword" class="form-control">
    </div>

    <input type="hidden" id="passId" class="form-control">
</div>
<div class="modal-footer">
<a href="#" id="editpass" class="btn btn-info pull-right">Change</a>
<button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!-- Password Modal -->


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
var name  = $('#'+id).children('a[data-target=name]').text();
var email  = $('#'+id).children('a[data-target=email]').text();
var team_name  = $('#'+id).children('a[data-target=team_name]').text();
var role  = $('#'+id).children('a[data-target=role]').text();


$('#name').val(name);
$('#email').val(email);
$('#team_name').val(team_name);
$('#role').val(role);

$('#userId').val(id);   
$('#myModal').modal('toggle');
});


//  append password in input fields
$('#updatepass').click(function(){
var id  = $('#userId').val(); 
var password  = $('#'+id).children('a[data-target=password]').text();

$('#passId').val(id);
$('#updatepassword').val(password);
$('#PasswordModal').modal('toggle');
});



// now create event to get data from fields and update in database 
$('#update').click(function(){
var id  = $('#userId').val(); 
var name =  $('#name').val();
var email =  $('#email').val();
var team_name =  $('#team_name').val();
var role =  $('#role').val();

$.ajax({
    url      : 'edit_user.php',
    method   : 'post', 
    data     : {name : name , email : email , team_name : team_name , role : role, id: id},
    success  : function(response){
// now update user record in table 
    $('#'+id).children('a[data-target=name]').text(name);
    $('#'+id).children('a[data-target=email]').text(email);
    $('#'+id).children('a[data-target=team_name]').text(team_name);
    $('#'+id).children('a[data-target=role]').text(role);
    $('#myModal').modal('toggle'); 
}
});
});

//Edit Password in database 
$('#editpass').click(function(){
var id  = $('#passId').val(); 
var password =  $('#updatepassword').val();

$.ajax({
    url      : 'edit_user_pass.php',
    method   : 'post', 
    data     : {password : password , id: id},
    success  : function(response){
// now update user record in table 
    $('#'+id).children('a[data-target=password]').text(password);
    $('#PasswordModal').modal('toggle'); 
}
});
});



$('#delete').click(function(){
var id  = $('#userId').val(); 

$.ajax({
    url      : 'delete-user.php',
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