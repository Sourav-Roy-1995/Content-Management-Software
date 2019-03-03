<?php

	session_start();
	if(!isset($_SESSION['auth_guest'])){

		header('Location:index.php');
	}


?>