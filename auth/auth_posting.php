<?php

	session_start();
	if(!isset($_SESSION['auth_posting'])){

		header('Location:index.php');
	}


?>