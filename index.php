<?php 
	
	session_start();
								
	require("connection.php");

	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if(isset($_POST['login'])){
								  
		$name     = mysqli_real_escape_string($conn, $_POST['name']);  
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $admin    = "admin";
		$designer = "designer";
		$writer   = "writer";  
		$posting  = "posting";
		$guestrelation  = "guestrelation";
        
		$sql_admin="SELECT * FROM user WHERE name='$name' AND password='$password' AND role= '$admin' ";
		$result_one = mysqli_query($conn, $sql_admin);

		$sql_designer="SELECT * FROM user WHERE name='$name' AND password='$password' AND role= '$designer' ";
		$result_two = mysqli_query($conn, $sql_designer);

		$sql_writer="SELECT * FROM user WHERE name='$name' AND password='$password' AND role= '$writer' ";
		$result_three = mysqli_query($conn, $sql_writer);

		$sql_posting="SELECT * FROM user WHERE name='$name' AND password='$password' AND role= '$posting' ";
		$result_four = mysqli_query($conn, $sql_posting);
		
		$sql_guestrelation="SELECT * FROM user WHERE name='$name' AND password='$password' AND role= '$guestrelation' ";
		$result_five = mysqli_query($conn, $sql_guestrelation);

		/*Retricted user from accessing different role pages*/
			
		$admin_session_id = session_id();
		$designer_session_id = session_id();
		$writer_session_id = session_id();
		$posting_session_id = session_id();
		$guestrelation_session_id = session_id();

		
		if (mysqli_num_rows($result_one) > 0) {

            $_SESSION['auth_admin'] = $admin_session_id;
            $_SESSION['LAST_ACTIVITY'] = time();
		}

		else if (mysqli_num_rows($result_two) > 0) {

            $_SESSION['auth_designer'] = $designer_session_id;
            $_SESSION['LAST_ACTIVITY'] = time();

		}

		else if (mysqli_num_rows($result_three) > 0) {

            $_SESSION['auth_writer'] = $writer_session_id;
            $_SESSION['LAST_ACTIVITY'] = time();

		}
		else if (mysqli_num_rows($result_four) > 0) {

            $_SESSION['auth_posting'] = $posting_session_id;
            $_SESSION['LAST_ACTIVITY'] = time();

		}
		
		else if (mysqli_num_rows($result_five) > 0) {

            $_SESSION['auth_guest'] = $guestrelation_session_id;
            $_SESSION['LAST_ACTIVITY'] = time();

		}
										
		else {
				?>
				<script>
                    window.onload = function forgot_pass()
                    {
                        $('.forgot').removeClass('d-none');
                    }
                </script>
			    <?php
			 }

		$row_admin = mysqli_fetch_array($result_one);
		$row_writer = mysqli_fetch_array($result_three); 
		$row_designer = mysqli_fetch_array($result_two);
		$row_posting = mysqli_fetch_array($result_four); 
		$row_guestrelation = mysqli_fetch_array($result_five);  
		

		if(is_array($row_admin)) {
			$_SESSION["name"] = $row_admin['name'];
		}

		else if(is_array($row_writer)) {
			$_SESSION["name"] = $row_writer['name'];
		}

		else if(is_array($row_designer)) {
			$_SESSION["name"] = $row_designer['name'];
		}

		else if(is_array($row_posting)) {
			$_SESSION["name"] = $row_posting['name'];
		}
		
		else if(is_array($row_guestrelation)) {
			$_SESSION["name"] = $row_guestrelation['name'];
		}
		
		}

		mysqli_close($conn);
		
?>

<?php

  if(isset($_SESSION['auth_admin'])){
    echo "<script>window.open('dashboard.php','_self')</script>";
  }

  else if(isset($_SESSION['auth_writer'])){
    echo "<script>window.open('writer.php','_self')</script>";
  }

  else if(isset($_SESSION['auth_designer'])){
    echo "<script>window.open('designer.php','_self')</script>";
  }

  else if(isset($_SESSION['auth_posting'])){
    echo "<script>window.open('posting.php','_self')</script>";
  }
  
  else if(isset($_SESSION['auth_guest'])){
    echo "<script>window.open('guestrelation.php','_self')</script>";
  }

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
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome.min.css -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.lineProgressbar.min.css">
    <link rel="stylesheet" href="css/flipclock.css">
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
                    Start Login-form
================================================-->
    <section class="Login-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--[/Start Logo]-->
                    <div class="logo">
                        <figure>
                            <a href="#"><img src="images/logo.png" alt="" class="img-fluid">Business Management Console </a>
                            <a href="" class="login"><img src="images/logo.jpeg" alt="Kiwi standing on oval"></a>
                        </figure>
                    </div>
                    <!--[/End Logo]-->
                </div>
            </div>
        </div>
    </section><!-- [/End Header_Top] -->
    <!--========================================================
                    Form-Section Start
==========================================================-->
    <section class="form-section">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="form-content-box">
                    <div class="form-details">
                        <!-- Main title -->
                        <div class="form-title">
                            <h1>Login</h1>
                        </div>
                        <!-- Form start -->
                        <div class="clear-fix"></div>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <a href="#" class="pull-right forgot d-none" >Forgot Password</a>
                                <input type="text" name="name" class="input-text" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button name="login" type="submit">login</button>
                            </div>
                        </form><!-- /form -->
                    </div>
                </div><!-- /.form-content-box -->
            </div><!-- /.display-table-cell -->
        </div><!-- /.display-table -->
    </section><!-- /.form-section -->


    <!--All JavaScript Plugin-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
    <!-- main.js -->
    <script src="js/main.js"></script>

    <script>
        window.onload = function control_business_status()
        {
            $.ajax({  
                url:"control_bs_status.php"
            });  
        }
    </script>

</body>

</html>