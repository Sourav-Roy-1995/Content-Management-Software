<?php

	session_start();
	if(!isset($_SESSION['auth_writer'])){

		header('Location:index.php');
	}


?>