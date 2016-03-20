<?php

	 $DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "b3ckm3d14";
	 $DB_name = "registration";
	 
	 $MySQLi_CON = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }

?>