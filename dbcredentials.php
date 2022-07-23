<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbName = "instagram";
 
   $connectDb = new mysqli($host,$username,$password,$dbName);
   if($connectDb->connect_error){
       die("unable to connect" . $connectDb->connect_error);
   }else {
    //    echo"connect successfully";
   }




?>