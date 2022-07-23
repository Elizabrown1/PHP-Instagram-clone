<?php
  include "dbcredentials.php";
  
  if(isset($_POST['submit'])){
    //   echo "working";
      $email = $_POST['email'];
      $full_name = $_POST['full_name'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $hashPassword = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO users ( email, full_name, user_name, password) VALUES ('$email', '$full_name','$user_name' ,'$hashPassword')";
      $inserted = $connectDb->query($query);
      echo $inserted;
      if($inserted){
          echo "Registrtion successfull";
      }else{
          echo"Registration Failed! please try again!";
      }
 
  }else{
      echo "not-successfull...";   
  }




?>