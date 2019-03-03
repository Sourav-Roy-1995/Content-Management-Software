<?php

	session_start();
	if(!isset($_SESSION['auth_admin'])){

		header('Location:index.php');
	}

?>