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
    <div class="search-section">
         <input type="text" id="search_input" placeholder="search">
    </div>
    <!--Get Business Name -->
    <ul id="bs_list">
    <input type="hidden" id="destination_one" value="" class="">
    <?php
    require("connection.php");        
    $result = mysqli_query($conn, "SELECT * FROM business");
    while($row=mysqli_fetch_array($result)){
    $id=$row['id'];             
    ?>
    <li><a href="#" class="sourcelink" ><?php echo $row['name']?></a></li>
    <?php
    }
    ?>   
    </ul> <!--Get Business Name --> 

</div>
</div>
</div>
<div class="col-lg-9 content-top">

<div class="content-update">
<h2>Content</h2>
<div class="table-content" id="content_table">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Business Name</th>
                <th scope="col">package</th>
                <th scope="col">facebook URL</th>
                <th scope="col">Twitter URL</th>
                <th scope="col">Instagram URL</th>
                <th scope="col">Login Info</th>
            </tr>
        </thead>
        <tbody>

        <?php					   	
            require("connection.php");				
            $result = mysqli_query($conn,"SELECT * FROM business");
            while($row=mysqli_fetch_array($result)){
            $id=$row['id'];
            ?>
            <tr>
                <td class="one_line"><?php echo $row['name']?></td>
                <td class="one_line"><?php echo $row['package']?></td>
                <td class="one_line url"><a href="<?php echo $row['fb_url']?>" target="_blank">Facebook.com</a></td>
                <td class="one_line url"><a href="<?php echo $row['twitter_url']?>" target="_blank">Twitter.com</a></td>
                <td class="one_line url"><a href="<?php echo $row['insta_url']?>" target="_blank">instagram.com</a></td>

                <td class="one_line">
                   <a href="#" name="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-sm view_data ">View</a> 
                </td>
            </tr>
            <?php                                  
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>

</div>
</div>
</section>

<!-- view Modal -->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Login Details</h5>
</div>
<div class="modal-body" id="content_detail">
<p>Business Name</p>

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
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<!-- main.js -->
<script src="js/main.js"></script>



<!-- Taking input from button with js-->
<script type="text/javascript">
$(document).ready(function() {
$('.sourcelink').click(function() {
$('#destination_one').val($(this).html());
});
});
</script>

<!--Taking input from button with js-->


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


<!-- Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_data', function(){  
var id = $(this).attr("id");  
if(id != '')  
{  
    $.ajax({  
            url:"modal_admin_two.php",  
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
<!-- Modal View -->


<!-- fetching content using business name with ajax -->
<script>  
$(document).ready(function(){  

$(function(){   
    $("#destination_one");   
});  
$('.sourcelink').click(function(){  
    var name = $('#destination_one').val();  
        
    if(name != '')  
    {  
        $.ajax({  
            url:"filter_all_link.php",  
            method:"POST",  
            data:{name:name},  
            success:function(data)  
            {  
                $('#content_table').html(data);  
            }  
        });  
    }
    
    else  
    {  
        alert("Please Select Business");  
    }    
});  
});  
</script> <!-- fetching content using business name with ajax-->


<!-- If link is null-->
<script>

    $("td.url a").each(function (i) {
        if ($(this).attr('href') == '') { 
            $(this).hide();
        } else {
            $(this).show();
        }
    });

</script> <!-- If link is null-->


</body>

</html>