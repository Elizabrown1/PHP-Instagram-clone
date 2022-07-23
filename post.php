<?php
   require "dbcredentials.php";

   session_start();

   if(isset($_POST['submit'])){
   //  print_r($_FILES['myFile']);
    $fileName = $_FILES['myFile']['name'];
    $user_id = $_SESSION['user_details']['user_id'];
    $post_details = $_POST['post'];
    $newName = time().$fileName;
    $upload = move_uploaded_file($_FILES['myFile']['tmp_name'], "post_image/".$newName);
    if($upload){
        $query = "INSERT INTO posts ( post_details, user_id,post_img) VALUES ('$post_details', '$user_id' ,'$newName')";
      $insert = $connectDb->query($query);
      if($insert){
        //   echo"$insert";
          $_SESSION['post']= "post is successful";
          header('Location: usersdashbord.php');
        //  echo "Uploaded Successfully";
      }else{
          $_SESSION['post_error']= "posting failed, please try again later";
        //  echo "Unable to upload";
      }
    }else{
       echo "  Unable to upload";
    }
    



    echo $newName;

   }
   

?>