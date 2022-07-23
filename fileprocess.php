<?php
   require "dbcredentials.php";

   session_start();

   if(isset($_POST['submit'])){
   //  print_r($_FILES['myFile']);
    $fileName = $_FILES['myFile']['name'];
    $user_id = $_SESSION['user_details']['user_id'];


    $newName = time().$fileName;
    $upload = move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/".$newName);
    if($upload){
      $query = "UPDATE users SET profile_pic = '$newName' WHERE user_id = $user_id ";
      $insert = $connectDb->query($query);
      if($insert){
         echo "Uploaded Successfully";
      }else{
         echo "Unable to upload";
      }
    }else{
       echo "  Unable to upload";
    }
    



    echo $newName;

   }
   

?>