<?php 
    include "auth/auth_designer.php";
    $designer_name =  $_SESSION["name"];
    date_default_timezone_set('Asia/Dhaka');
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
<title>All Content</title>
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
<!-- Date Picker -->
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
        <!--[/Start Logo ]-->
        <div class="logo">
            <figure>
                <a href="designer.php"><img src="images/logo.png" alt="" class="img-fluid">Business Management Console </a>
            </figure>
        </div><!--[/End logo]-->
    </div>
    <div class="col-md-7 col-lg-8">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All content</a>
                        <ul class="dropd">
                            <li><a href="designer_special_content.php">special content</a></li>
                            <li><a href="designer.php">regular content</a></li>
                        </ul>
                    </li>
                    
                    <?php					   	
                    require("connection.php");
                    $business_id = $_GET['bs_id'];				

                    $result = mysqli_query($conn, "SELECT * FROM business WHERE designer =  '".$designer_name."' AND bs_status = '".$active."' order by id desc limit 1");
                    
                    while($row=mysqli_fetch_array($result)){
                    $id=$row['id'];

                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="designer_links.php">links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="designer_business.php?bs_id=<?php echo $id; ?>">Business</a>
                    </li>
                    <?php                                  
                    }
                    ?>
                </ul>
            </div><!--[/End Navbar]-->
        </nav><!--[/End Nav]-->
        <div id="nav-item">
            <a class="nav-link dropdown" href=""><span>hello</span> <?php echo $designer_name; ?> <i class="fa fa-user user"></i></a>
            <div class="logout">
                <ul>
                    
                    <li><a href="#"><i class="fas fa-cogs lgo"></i>setting</a></li>
                    <li><a href="counter_designer.php"><i class="fas fa-calculator lgo"></i>Counter</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt lgo"></i>LogOut</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</header><!--[/End header]-->

<!--===============================================
        Start all-content
================================================-->
<section class="all-content">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-3">
        <div class="sidebar-area">
            <div class="filter-section">
                <input type="text" name="date" id="date" class="filtering" placeholder="Date" value="<?php echo  date("d-m-Y") ?> "/>
                <button name="filter" id="filter">filter</button>
            </div>
            <div class="sidebar-menu">
                <div class="search-section">
                    <input type="text" id="search_input" placeholder="search">
                </div>
                <!--Get Business Name -->
                <ul id="bs_list">

                <input type="hidden" id="destination_one" value="" class="form-control">

                <input type="hidden" id="designer_name" class="form-control"  value="<?php echo  $designer_name ?> " > 

                <input type="hidden" value="active" id="active" class="form-control">    

                <?php
                require("connection.php");        
                $result = mysqli_query($conn, "SELECT * FROM business WHERE designer =  '".$designer_name."' AND bs_status = '".$active."' ");
                while($row=mysqli_fetch_array($result)){
                $id=$row['id'];             
                ?>
                <li><a href="#" class="sourcelink" id="bs-link"><?php echo $row['name']?></a></li>
                <?php
                }
                ?>   
                </ul> <!--Get Business Name --> 
            </div><!--[/End sidebar-menu]-->
        </div><!--[/End sidebar-area]-->
    </div>

    <!--Get Content --> 
    <div class="col-lg-9 content-top">
        <div class="content-update" id="content_table">
                
        </div>
    </div><!--End Get Content --> 
</div>
</div>

<!-- view Modal -->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Contact Details</h5>
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


</section> <!--[/End all-content ]-->




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
<!-- Date Picker -->
<script src="js/custom_date_picker.js"></script>




<!-- Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_data', function(){  
var id = $(this).attr("id");  
if(id != '')  
{  
    $.ajax({  
            url:"modal_admin_one.php",  
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


<!-- date picker -->
<script>  
$(document).ready(function(){  
$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
});  
$(function(){  
    $("#date").datepicker();  
});  
    
});  
</script>
<!-- date picker -->


<!-- Onload fetching data using date and user name and activity with  ajax -->
<script>  
$(document).ready(function(){  
$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
});  
$(function(){  
    $("#date").datepicker();   
    $("#designer_name");
    $("#active"); 
});  
$(document).ready(function (){  
    var date = $('#date').val();
    var designer_name = $('#designer_name').val();
    var active = $('#active').val();
    if(date != '' && designer_name != '' && active != '') 
    {  
            $.ajax({  
                url:"filter_content_designer.php",  
                method:"POST",  
                data:{date:date,designer_name:designer_name,active:active},  
                success:function(data)  
                {  
                    $('#content_table').html(data);  
                }  
            });  
    }  
    else  
    {  
            alert("No Content At This Date");  
    }  
});  
});  
</script>
<!-- Onload fetching data using date and user name and activity with  ajax -->


<!-- fetching data using date and user name and activity with  ajax -->
<script>  
$(document).ready(function(){  
$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
});  
$(function(){  
    $("#date").datepicker();
    $("#designer_name");
    $("#active"); 
});  
$('#filter').click(function(){  
    var date = $('#date').val();
    var designer_name = $('#designer_name').val();
    var active = $('#active').val();
    if(date != '' && designer_name != '' && active != '')  
    {  
            $.ajax({  
                url:"filter_content_designer.php",  
                method:"POST",  
                data:{date:date,designer_name:designer_name,active:active},  
                success:function(data)  
                {  
                    $('#content_table').html(data);  
                }  
            });  
    }  
    else  
    {  
            alert("No Content At This Date");  
    }  
});  
});  
</script>
<!-- fetching data using date and user name and activity with ajax-->


<!-- fetching content using business name with ajax -->
<script>  
$(document).ready(function(){  

$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
}); 

$(function(){  
    $("#date").datepicker();
    $("#destination_one");   
});  
$('.sourcelink').click(function(){  
    var date = $('#date').val();
    var name = $('#destination_one').val();  
        
    if( date != '' && name != '')  
    {  
            $.ajax({  
                url:"filter_content_admin_two.php",  
                method:"POST",  
                data:{date:date, name:name},  
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

</body>

</html>