<?php 
    include "auth/auth_writer.php";
    $writer_name =  $_SESSION["name"];
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
                    <a href="writer.php"><img src="images/logo.png" alt="" class="img-fluid">Business Management Console </a>
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
                            <li><a href="writer_special_content.php">special content</a></li>
                            <li><a href="writer.php">regular content</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">write content</a>

                        <ul class="dropd">
                            <li><a href="writer_write_special_content.php">special content</a></li>
                            <li><a href="writer_write_content.php">regular content</a></li>
                        </ul>
                    </li>

                    <?php					   	
                    require("connection.php");
                    $business_id = $_GET['bs_id'];					
                    $result = mysqli_query($conn, "SELECT * FROM business WHERE writer =  '".$writer_name."' AND bs_status = '".$active."' order by id desc limit 1");
                    while($row=mysqli_fetch_array($result)){
                    $id=$row['id'];

                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="writer_links.php">links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="writer_business.php?bs_id=<?php echo $id; ?>">Business</a>
                    </li>
                    <?php                                  
                        }
                    ?>

                </ul>
                </div><!--[/End Navbar]-->
            </nav><!--[/End nav]-->
            <div id="nav-item">
                <a class="nav-link dropdown" href=""><span>hello</span> <?php echo $writer_name; ?> <i class="fa fa-user user"></i></a>
                <div class="logout">
                    <ul>
                        
                        <li><a href="#"><i class="fas fa-cogs lgo"></i>setting</a></li>
                        <li><a href="counter_writer.php"><i class="fas fa-calculator lgo"></i>Counter</a></li>
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

                    <!-- <input type="hidden" id="destination_one" value="" class=""> -->

                    <input type="hidden" id="writer_name" class="form-control"  value="<?php echo  $writer_name ?> " > 

                    <input type="hidden" value="active" id="active" class="form-control"> 

                    <?php
                    require("connection.php");        
                    $result = mysqli_query($conn, "SELECT * FROM business WHERE writer =  '".$writer_name."' AND bs_status = '".$active."' order by name");
                    while($row=mysqli_fetch_array($result)){
                    $id=$row['id'];             
                    ?>
                    <li><a href="#" class="sourcelink" name="<?php echo $row['name']?>"><?php echo $row['name']?></a></li>
                    <?php
                    }
                    ?>   
                    </ul> <!--Get Business Name --> 
                </div>
            </div>
        </div>
        <div class="col-lg-9 content-top">
            <div class="content-update">
                <div class="add_content">
                    <h2>Add Content</h2>
                    <form id="add_content_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form" >
                    <div class="col-md-12">
                        <div class="msg"></div>
                    </div>
                        <input name="name" type="text"  id="destination_two" class="blue" placeholder="Name" autofocus="autofocus" required>

                        <input type="text" name="date" id="date" class="blue" placeholder="Date"  required>

                        <textarea class="textarea clear-txt" type="text" name="post_material" placeholder="Post Material" required></textarea>

                        <textarea class="textarea clear-txt" type="text" name="poster_material" placeholder="Poster Material" ></textarea>

                        <textarea class="textarea clear-txt" type="text" name="vision" placeholder="vision" ></textarea>
                    
                        <textarea class="textarea" type="text" name="tags" id="tag" placeholder="Tags" ></textarea>

                        <textarea class="clear-txt" placeholder="Comments" name="comment" ></textarea>
                    </div>
                    <button name="submit" class="btn btn-info text-right txt" id="add_content_btn">save</button>
            
                    </form>
                </div>
            </div><!--[/End content-update]-->

            <!--Get Content --> 
            <div class="content-top">
                <div class="content-update" id="content_table">

                </div>
            </div><!--End Get Content --> 
        </div>
    </div>
</div>
</section><!--[/End all-content]-->

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

<!--Edit Modal -->
<div id="myModal" class="modal fade" role="dialog" style="width:100%">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Contact Details</h5>
</div>
<div class="modal-body">
    <div class="form-group">
    <label>Name</label>
    <input type="text" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label>Date</label>
    <input type="text" class="form-control date">
    </div>

    <div class="form-group">
    <label>Post Material</label>
    <input type="text" id="post_material" class="form-control">
    </div>

    <div class="form-group">
    <label>Tags</label>
    <input type="text" id="tags" class="form-control">
    </div>

    <div class="form-group">
    <label>Poster Material</label>
    <input type="text" id="poster_material" class="form-control">
    </div>

    <div class="form-group">
    <label>Vision</label>
    <input type="text" id="vision" class="form-control">
    </div>

    <div class="form-group">
    <label>Comment</label>
    <input type="text" id="comment" class="form-control">
    </div>
    <input type="hidden" id="userId" class="form-control">
</div>
<div class="modal-footer">
<a href="#" id="save" class="btn btn-primary pull-right">Update</a>
<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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

<!--Edit Modal View -->
<script>
$(document).ready(function(){

//  append values in input fields
$(document).on('click','a[data-role=update]',function(){
var id  = $(this).data('id');
var name  = $('#'+id).children('td[data-target=name]').text();
var date  = $('#'+id).children('td[data-target=date]').text();
var post_material  = $('#'+id).children('td[data-target=post_material]').text();
var tags  = $('#'+id).children('td[data-target=tags]').text();
var poster_material  = $('#'+id).children('td[data-target=poster_material]').text();
var vision  = $('#'+id).children('td[data-target=vision]').text();
var comment  = $('#'+id).children('td[data-target=comment]').text();

$('#name').val(name);
$('.date').val(date);
$('#post_material').val(post_material);
$('#tags').val(tags);
$('#poster_material').val(poster_material);
$('#vision').val(vision);
$('#comment').val(comment);

$('#userId').val(id);
$('#myModal').modal('toggle');
});

// now create event to get data from fields and update in database 

$('#save').click(function(){
var id  = $('#userId').val(); 
var name =  $('#name').val();
var date =  $('.date').val();
var post_material =   $('#post_material').val();
var tags =  $('#tags').val();
var poster_material =  $('#poster_material').val();
var vision =  $('#vision').val();
var comment =  $('#comment').val();

$.ajax({
    url      : 'edit_content.php',
    method   : 'post', 
    data     : {name : name , date: date , post_material : post_material , tags: tags , poster_material:poster_material , vision:vision , comment:comment ,  id: id},
    success  : function(response){
// now update user record in table 
    $('#'+id).children('td[data-target=name]').text(name);
    $('#'+id).children('td[data-target=date]').text(date);
    $('#'+id).children('td[data-target=post_material]').text(post_material);
    $('#'+id).children('td[data-target=tags]').text(tags);
    $('#'+id).children('td[data-target=poster_material]').text(poster_material);
    $('#'+id).children('td[data-target=vision]').text(vision);
    $('#'+id).children('td[data-target=comment]').text(comment);
    $('#myModal').modal('toggle'); 

}
});
});
});
</script>
<!--Edit Modal View -->

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
</script> <!-- date picker -->

<!-- One date input to another  -->
<script >

$('input[name="date"]').change(function() {
$('input[name="date"]').val($(this).val());
});
</script><!-- One date input to another  -->

<!-- Taking input from button with js-->
<script type="text/javascript">

$(document).ready(function() {
$('.sourcelink').click(function() {
$('#destination_two').val($(this).text());
});
});
</script> <!-- Taking input from button with js-->


<!-- Add content with ajax-->
<script>

// Variable to hold request
var request;

// Bind to the submit event of our form
$("#add_content_form").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    var $clear_inputs = $form.find(".clear-txt");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    //$inputs.prop("disabled", false);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "add_content_system.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        $('.msg').html('<div class="alert alert-success">Content successfuly Saved.</div>').hide().fadeIn(1500).fadeOut(3000);
        $clear_inputs.val('');
    });

    // Callback handler that will be called on failure
    request.fail(function (response, textStatus, jqXHR){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
       //$inputs.prop("disabled", false);
        
    });

});
</script> <!-- Add content with ajax-->

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

<!-- Onload fetching data using date, user and active business with  ajax -->
<script>  
$(document).ready(function(){  
$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
});  
$(function(){  
    $("#date").datepicker();
    $("#writer_name");  
    $("#active");
});  
$(document).ready(function (){  
    var date = $('#date').val();
    var writer_name = $('#writer_name').val();
    var active = $('#active').val();

    if(date != '' && writer_name != '' && active != '')  
    {  
            $.ajax({  
                url:"filter_content_writer.php",  
                method:"POST",  
                data:{date:date,writer_name:writer_name,active:active},  
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
<!-- Onload fetching data using date,user and active business with  ajax -->


<!-- fetching data using date, user name and active business with  ajax -->
<script>  
$(document).ready(function(){  
$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
});  
$(function(){  
    $("#date").datepicker();
    $("#writer_name");
    $("#active"); 
        
});  
$('#filter').click(function(){  
    var date = $('#date').val();
    var writer_name = $('#writer_name').val();
    var active = $('#active').val();

    if(date != '' && writer_name != '' && active != '')   
    {  
            $.ajax({  
                url:"filter_content_writer.php",  
                method:"POST",  
                data:{date:date,writer_name:writer_name,active:active},  
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
<!-- fetching data using date,user name and active business with  ajax -->


<!-- fetching content using business name with ajax -->
<script>  
$(document).ready(function(){  

$.datepicker.setDefaults({  
    dateFormat: 'dd-mm-yy'   
}); 

$(function(){  
    $("#date").datepicker();  
});  
$('.sourcelink').click(function(){  
    var date = $('#date').val();
    var name = $(this).attr("name");
        
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


<!-- fetching tags with ajax -->
<script>  
$(document).ready(function(){  
    $('.sourcelink').click(function(){  

        var name = $(this).attr("name");  
            
        if(name != '')  
        {  
                $.ajax({  
                    url:"filter_tags.php",  
                    method:"POST",  
                    data:{name:name},  
                    success:function(data)  
                    {  
                        $('#tag').html(data);  
                    }  
                });  
        }

        else  
        {  
                alert("Please Select Business");  
        }    
    });  
});  
</script> <!-- fetching tags with ajax-->


</body>

</html>