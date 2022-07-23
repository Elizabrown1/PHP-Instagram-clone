<?php 
session_start();

include "dbcredentials.php";
  
  if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "SELECT * FROM users WHERE email = '$email'";

      $inserted = $connectDb->query($query);
   
      if($inserted->num_rows > 0){
        $userDetails = $inserted->fetch_assoc();
        $hashedPass = $userDetails['password'];
        $verify = password_verify($password, $hashedPass);
          // echo $verify;
          print_r($verify);
        if($verify){
          $_SESSION['user_details'] = $userDetails;
          header("Location: usersdashbord.php");
          }else{
          $_SESSION['details_error'] = "Invalid Password";
          header("Location: signinn.php");
        }
      }else{
        $_SESSION['details_error'] = "Invalid Email";
          header("Location: signinn.php");
      }
          // echo "Users Exist";
      // }else{
      //     echo" Does not exist";
      // }

    
      
  }else{
      echo"not-successfull";   
  }


?>