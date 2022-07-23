<?php
   include "dbcredentials.php";
  session_start();
   if(isset($_POST['submit'])){
       $email = $_POST['email'];
       $password = $_POST['password'];

       echo $email;
       $query = "SELECT * FROM users WHERE email = ?";
       $queryDb = $connectDb->prepare($query);
       $binder = $queryDb->bind_param('s', $email);
       $inserted = $queryDb->execute();
       if($inserted){
           $result = $queryDb->get_result()->fetch_assoc();
           $_SESSION['user_details'] = $result;
           echo "succesfully";
           print_r($result);
       }else{
           echo "failed";
       }
     
       
   }else{
       echo"not-successfull";   
   }






?>