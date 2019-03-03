<?php 
    include "auth/auth_writer.php";
    $writer_name =  $_SESSION["name"];
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
    <link rel="stylesheet" href="css/counter.css">
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
                                    <a class="nav-link active" href="writer.php">All content</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="writer_write_content.php">write content</a>
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
                        </div>
                        <!--[/End Navbar]-->
                    </nav>
                    <!--[/End nav]-->
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
    </header>
    <!--[/End header]-->

    <!--===============================================
            Start all-content
================================================-->
    <section class="all-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 counter-top">
                    <div id="model-content-area">
                        <div class="row">
                           
                            <!--***********Start Total Register************* -->
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="card">
                                            <h1>counter</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <!-- Button trigger modal -->
                                        <?php                         
                                        require("connection.php");         
                                        $result_total_bs = mysqli_query($conn,"SELECT *FROM business");
                                        $num_business = mysqli_num_rows($result_total_bs);
                                        ?>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-1">C</small>Total Registered</p>
                                                     <h6 class="clr-1"><?php  echo "$num_business"; ?></h6>
                                                </div>
                                            </div>
                                        </button>
                                        <?php
                                        ?>
                                    </div>

                                <!--***********END Total Register************* -->


                                <!--***********Start Total Active************* -->
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-2"><i class="fas fa-check"></i></small>Total Active</p>

                                                    <?php                         
                                                    require("connection.php"); 
                                                    $active = 'active';        
                                                    $result_active_bs = mysqli_query($conn,"SELECT *FROM business where bs_status = '".$active."' ");
                                                    $num_active_business = mysqli_num_rows($result_active_bs);
                                                    ?>
                                                     <h6 class="clr-2"><?php echo "$num_active_business"; ?></h6>
                                                    <?php

                                                    ?>
                                                </div>
                                            </div>
                                        </button>
                                    </div>

                        <!--***********End Total Active************* -->

                        <!--***********Start Total Inactive************* -->
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-3"><i class="far fa-circle"></i></small>Total Inactive</p>

                                                    <?php                         
                                                    require("connection.php"); 
                                                    $inactive = 'inactive';        
                                                    $result_inactive_bs = mysqli_query($conn,"SELECT *FROM business where bs_status = '".$inactive."' ");
                                                    $num_inactive_business = mysqli_num_rows($result_inactive_bs);
                                                    
                                                    ?>
                                                     <h6 class="clr-3"><?php echo "$num_inactive_business"; ?></h6>
                                                    <?php

                                                    ?>
                                                </div>
                                            </div>
                                        </button>
                                    </div>

                                     <!--***********End Total Inactive************* -->
                                </div>
                            </div>

                           
                     <!--***********Start Total Package************* -->
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="card">
                                            <h1>Package</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <!-- Button trigger modal -->
                                        <?php                       
                                        require("connection.php");                 
                                        $result = mysqli_query($conn,"SELECT package_type FROM package");
                                        while($row=mysqli_fetch_array($result)){
                                        $id=$row['id'];
                                        $type = $row['package_type'];
                                        ?>
                                        <button type="button" class="btn btn-primary view_data"  types="<?php echo $row["package_type"]; ?>" name="view" value="View">
                                        
                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-4">C</small><?php echo $row['package_type']; ?></p>
                                                    <?php                         
                                                    require("connection.php");         
                                                    $result_type_bs = mysqli_query($conn,"SELECT *FROM business where package = '".$type ."' ");
                                                    $num_type_business = mysqli_num_rows($result_type_bs);
                                                    
                                                    ?>
                                                    <h6 class="clr-4"><?php echo "$num_type_business"; ?></h6>
                                                    <?php

                                                    ?>
                                                </div>
                                            </div>
                                        </button>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>

                    <!--***********End Total Package************* -->


                    <!--***********Start Total Teams************* -->
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="card">
                                            <h1>Teams</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <!-- Button trigger modal -->
                                        <?php                       
                                        require("connection.php");                 
                                        $result = mysqli_query($conn,"SELECT team_name FROM team order by team_name asc");
                                        while($row=mysqli_fetch_array($result)){
                                        $id=$row['id'];
                                        $team = $row['team_name'];
                                        ?>

                                        <button type="button" class="btn btn-primary view_team"  team="<?php echo $row["team_name"]; ?>" name="view_team" value="View">

                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-7">C</small><?php echo $row['team_name']; ?></p>
                                                    <?php                         
                                                    require("connection.php");       
                                                    $result_team_bs = mysqli_query($conn,"SELECT *FROM business where team_name = '".$team."' ");
                                                    $num_team_business = mysqli_num_rows($result_team_bs);
                                                    
                                                    ?>
                                                    <h6 class="clr-6"><?php echo "$num_team_business";?></h6>
                                                    <?php

                                                    ?>
                                                </div>
                                            </div>
                                        </button>
                                        <?php
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>

                            <!--***********End Total Teams************* -->


                            <!--***********Start Total Country************* -->

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="card">
                                            <h1>Country</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-12">
                                        <!-- Button trigger modal -->
                                        <?php                       
                                        require("connection.php");                 
                                        $result = mysqli_query($conn,"SELECT country FROM business GROUP BY country");
                                        while($row=mysqli_fetch_array($result)){
                                        $id=$row['id'];
                                        $country_name = $row['country'];
                                        ?>

                                        <button type="button" class="btn btn-primary view_country"  country_name="<?php echo $row["country"]; ?>" name="view_country" value="View">

                                            <div class="card">
                                                <div class="card-body">
                                                    <p class="card-text"><small class="bg-8">C</small><?php echo $row['country']; ?></p>
                                                    <?php                         
                                                    require("connection.php");       
                                                    $result_country_bs = mysqli_query($conn,"SELECT *FROM business where country = '".$country_name."' ");
                                                    $num_country_business = mysqli_num_rows($result_country_bs);
                                                    
                                                    ?>
                                                    <h6 class="clr-9"><?php echo "$num_country_business";?></h6>
                                                    <?php

                                                    ?>
                                                </div>
                                            </div>
                                        </button>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!--***********End Total Country************* -->
                            
                        </div>
                    </div>
                </div>
                <!--[/End content-update]-->
            </div>
        </div>
        </div>
    </section>
    <!--[/End all-content]-->



<!-- Total Register Modal -->
<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong1Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title text-center" id="exampleModalLong1Title">Total Registered</h6>
</div>


<div class="modal-body">
<div class="row">
    <div class="col-lg-12">
        <div class="campaign-cordinator1">
            <h3></h3>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Business Name</th>
                        <th scope="col">Package</th>
                    </tr>
                </thead>
                <?php                          
                require("connection.php");         
                $result = mysqli_query($conn,"SELECT name, package FROM business");
                if(mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_array($result)){
                $name            =     $row['name']  ;           
                $package         =     $row['package'] ;            
                ?> 
                <tbody>
                    <tr>
                        <td><?php echo $name;?></td>
                        <td><?php echo $package;?></td>
                    </tr>
                </tbody>    
                <?php
                }
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>  <!-- Total Register Modal -->



<!-- Total Active Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h6 class="modal-title text-center" id="exampleModalLong2Title">Total Active</h6>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="campaign-cordinator1">
                    <h3></h3>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">Business Name</th>
                                <th scope="col">Package</th>
                            </tr>
                        </thead>
                        <?php                          
                        require("connection.php");         
                        $result = mysqli_query($conn,"SELECT name, package FROM business where bs_status = 'active' ");
                        if(mysqli_num_rows($result) > 0){
                        while($row=mysqli_fetch_array($result)){
                        $name            =     $row['name']  ;           
                        $package         =     $row['package'] ;            
                        ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $name;?></td>
                                <td><?php echo $package;?></td>
                            </tr>
                        </tbody>    
                        <?php
                        }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div> <!-- Total Active Modal -->


<!--Total InActive Modal -->
<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title text-center" id="exampleModalLong3Title">Total InActive</h6>

</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-12">
    <div class="campaign-cordinator1">
        <h3></h3>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Business Name</th>
                    <th scope="col">Package</th>
                </tr>
            </thead>
            <?php                          
            require("connection.php");         
            $result = mysqli_query($conn,"SELECT name, package FROM business where bs_status = 'inactive' ");
            if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
            $name            =     $row['name']  ;           
            $package         =     $row['package'] ;            
            ?> 
            <tbody>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $package;?></td>
                </tr>
            </tbody>    
            <?php
            }
            }
            ?>
        </table>
    </div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> <!--Total InActive Modal -->



<!--Package Modal -->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong4Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

<div class="modal-body" id="package_detail">

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> <!--Package Modal -->


                                      
                                        

<!--Team Modal -->
<div class="modal fade" id="team_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong7Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">

</div>
<div class="modal-body" id="team_detail">

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> <!--Team Modal -->




<!--Country Modal -->
<div class="modal fade" id="country_name_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong10Title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

    <div class="modal-body" id="country_name_detail">

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div> <!--Country Modal -->







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



<!-- Package Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_data', function(){  
var types = $(this).attr("types");  
if(types != '')  
{  
    $.ajax({  
            url:"modal_admin_package.php",  
            method:"POST",  
            data:{types:types},  
            success:function(data){  
                $('#package_detail').html(data);  
                $('#dataModal').modal('show');  
            }  
    });  
}            
});  
});  
</script>
<!-- Package Modal View -->


<!--Team Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_team', function(){  
var team = $(this).attr("team");  
if(team != '')  
{  
    $.ajax({  
            url:"modal_admin_team.php",  
            method:"POST",  
            data:{team:team},  
            success:function(data){  
                $('#team_detail').html(data);  
                $('#team_Modal').modal('show');  
            }  
    });  
}            
});  
});  
</script>
<!-- Team Modal View -->


<!--Country Model View -->
<script>  
$(document).ready(function(){  

$(document).on('click', '.view_country', function(){  
var country_name = $(this).attr("country_name");  
if(country_name != '')  
{  
    $.ajax({  
            url:"modal_admin_country.php",  
            method:"POST",  
            data:{country_name:country_name},  
            success:function(data){  
                $('#country_name_detail').html(data);  
                $('#country_name_Modal').modal('show');  
            }  
    });  
}            
});  
});  
</script>
<!-- Country Modal View -->


</body>

</html>