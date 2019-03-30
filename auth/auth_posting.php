<?php

	/******* for a a day timeout, specified in seconds  *********/
	ini_set("session.gc_maxlifetime", 10800);
	$lifetime=10800;
	session_start();
	setcookie(session_id(),time()+$lifetime);

	if(!isset($_SESSION['auth_posting'])){

		header('Location:index.php');
	}


	/******* To specify automatic logout time  *********/
	$time = $_SERVER['REQUEST_TIME'];

	/******* for a a day timeout, specified in seconds  *********/
	$timeout_duration = 10800;

	/**
	* Here we look for the user's LAST_ACTIVITY timestamp. If
	* it's set and indicates our $timeout_duration has passed,
	* blow away any previous $_SESSION data and start a new one.
	*/
	if ($time - $_SESSION['LAST_ACTIVITY'] > $timeout_duration) {
		session_unset();
		session_destroy();
		header('Location:index.php');
	}

	/*** Finally, update LAST_ACTIVITY so that our timeout  is based on it and not the user's login time. ***/
	$_SESSION['LAST_ACTIVITY'] = $time;
?>