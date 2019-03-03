<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );

 
 define('DBHOST', 'localhost');
 define('DBUSER', 'veechite_savaco');
 define('DBPASS', 'savaco@2018');
 define('DBNAME', 'veechite_dashboard_savasaachi');
 

 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);

 

 if (!$conn) {
  die("Connection failed : " . mysql_error());
     echo"mysqli error";
 }
 
 if (!$dbcon) {
  die("Database Connection failed : " . mysql_error());
         echo"database error";
 }

?>