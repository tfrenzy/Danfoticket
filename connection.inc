<?php
		  //1st step: Connect to the database
		  $dbhost= "localhost";
		  $dbuser = "root";
		  $dbpasswd = "red";
		  
		  //2nd step: initiate connection
		  mysql_connect($dbhost, $dbuser, $dbpasswd);
		  
		  //3rd step: Select database
		  $dbname = "danfo_db";
		  mysql_select_db($dbname);
?>