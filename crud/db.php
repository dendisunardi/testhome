<?php
     define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','testdb');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','b3ckm3d14');
 
     $db = new mysqli(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
     if($db->connect_errno)
     {
       die("ERROR : -> ".$db->connect_error);
     }