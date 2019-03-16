<?php
    include "auth/auth_admin.php"
?>

<?php 
    $admin_name =  $_SESSION["name"];
    $active = "active";
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
    <title>Write Content</title>
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
    <!-- datatable.css -->
    <link rel="stylesheet" href="css/datatable.css">

</head>

<body>
    <!--===============================================
            Start content_area
================================================-->
    <header class="header sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col- col-sm-9 col-md-5 col-lg-4">
                    <div class="logo">
                        <figure>
                            <a href="writer.php"><img src="images/logo.png" alt="" class="img-fluid"><span>Business Management Console</span> </a>
                        </figure>
                    </div>
                </div>
                <div class="col- col-sm-3 col-md-7 col-lg-8">
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
                        <!--[/End Navbar]-->
                    </nav>
                    <!--[/End nav]-->
                    <div id="nav-item">
                        <a href="" class="nav-link dropdown"><span>hello </span> <?php echo $admin_name; ?> <i class="fa fa-user user"></i></a>
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
    <!--[/End header]-->



<!--===============================================
            Start all-content
================================================-->
<section class="all-content">
    <div class="container">
        <div class="row">          
            <div class="col-lg-12 business-header">
                <div id="all_bs_card">
                    <h1>All Business</h1>
                </div>
            </div>
            <table id="business_table" class="table table-striped table-bordered all-business">
                <thead>
                    <tr>
                        <th>Business Name</th>
                        <th>Status</th>
                        <th>Package</th>
                        <th>Country</th>
                        <th>Contact</th>
                        <th>View</th>
                    </tr>
                </thead>

                <tbody>
                    <?php					   	
                    require("connection.php");				
                    $result = mysqli_query($conn,"SELECT * FROM business");
                    while($row=mysqli_fetch_array($result)){
                    $id=$row['id'];
                    ?>
                        <tr id="<?php echo $row['id']; ?>" >
                            <td class="one_line"><?php echo $row['name']?></td>
                            <td class="one_line"><?php echo $row['bs_status']?></td>
                            <td class="one_line"><?php echo $row['package']?></td>
                            <td class="one_line"><?php echo $row['country']?></td>
                            <td class="one_line"><?php echo $row['contact']?></td>
                            <td class="one_line">
                            <a href="#<?php echo $row["id"];?>" name="view" id="<?php echo $row["id"];?>" class="btn btn-info btn-sm view_data ">View</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Business Name</th>
                        <th>Status</th>
                        <th>Package</th>
                        <th>Country</th>
                        <th>Contact</th>
                        <th>View</th>
                    </tr>
                </tfoot>

            </table>

        </div><!--[/End content-update]--> 
     </div>  
</section>
<!--[/End all-content]-->


<!-- view Modal -->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Business Details</h5>
</div>
<div class="modal-body" id="content_detail">

</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Back</button>
</div>
</div>
</div>
</div>
<!-- view Modal -->


<!--All JavaScript Plugin-->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- datatable.js -->
<script src="js/datatable.min.js"></script>
<script src="js/datatable.bootstrap.js"></script>

<!--All JavaScript Plugin-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<!-- main.js -->
<script src="js/main.js"></script>


<!--Data Table-->
<script>    
    $(document).ready(function() {
        $('#business_table').DataTable();
    });
</script>
<!--Data Table-->


<!--All Business Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_data', function(){  
var id = $(this).attr("id");  
if(id != '')  
{  
    $.ajax({  
            url:"modal_all_business.php",  
            method:"POST",  
            data:{id:id},  
            success:function(data){  
                $('#content_detail').html(data);  
                $('#dataModal').modal('show');  
            }  
    });  
}            
});  
});  
</script>
<!--All Business Modal View -->

</body>

</html>