<?php
session_start();
// $userDetails =$_SESSION['user_details'];
include "navbar.php";
include "dbcredentials.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/daa33ecf5c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="usersdashboard.css">
</head>
<body>
    <style>
        body {
  background-color: #fbfbfb;
  
}
input{
    border: none;
}

    </style>
    <div class="container ">
      <div class="row d-flex justify-content-center">
       
      <!-- <section class="main col-4 d-flex"> -->
    
    <div class="wrapper main  d-flex">
        <div class="left-col">
            <div class="status-wrapper">
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 1.png" alt=""></div>
                    <p class="username">Elizabrown</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 2.png" alt=""></div>
                    <p class="username">stephen</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 3.png" alt=""></div>
                    <p class="username">mike</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 4.png" alt=""></div>
                    <p class="username">James</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 5.png" alt=""></div>
                    <p class="username">John</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="img/cover 6.png" alt=""></div>
                    <p class="username">user</p>
                </div>
                
                
        </div>
    </div>
<!-- </section> -->

<!-- <section class="main col-4 d-flex"> -->
    <!-- <div class="wrapper main col-4 d-flex"> 
        
        <div class="right-col">
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/profile-pic.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">kunaal kumar</p>
                </div>
                <button class="action-btn">switch</button>
            </div>
            <p class="suggestion-text">Suggestions for you</p>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 9.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 10.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 11.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 12.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
            <div class="profile-card">
                <div class="profile-pic">
                    <img src="img/cover 13.png" alt="">
                </div>
                <div>
                    <p class="username">modern_web_channel</p>
                    <p class="sub-text">followed bu user</p>
                </div>
                <button class="action-btn">follow</button>
            </div>
        </div>
    </div> -->
<!-- </section> -->
   
</div>
    </div>





  <!-- <div class="Instagram-card">
    <div class="Instagram-card-header">
      <img src="img-2.jpg"class="Instagram-card-user-image">
      <a class="Instagram-card-user-name" href="https://www.instagram.com/rogersbase/"> </i><?php echo $userDetails ['full_name']  ?></a>
      <div class="Instagram-card-time"> 1 seconds </div>
    </div>

    <div class="d-block Instagram-card-image mt-3">
      <img src= "img-2.jpg" class="w-100 h-100  hig" />
    </div>

    <div class="Instagram-card-content">
      <p class="Likes">640 views</p>
      <p><a class="Instagram-card-content-user" href="img-2.jpg"><?php echo $userDetails ['profile_pic']  ?></a>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem magni, qui illum porro asperiores molestiae .  both of which were a ton of fun! Massive thank you to the team at @Nintendo for having me on! I had an absolute blast! 🎉</p>
      <p class="comments">This is beautiful</p>
      <br><a class="user-comment" href="https://www.instagram.com/chrisobrien64/">stella 64</a> NO WAY! This is beautiful</br>
      <br><a class="user-comment" href="https://www.instagram.com/artie_mcparty/">allen paul</a> nice picture.</br>
      <br><a class="user-comment" href="https://www.instagram.com/theealeexj/">mary ann</a> I JUST TRIED IT OUT TODAY ITS AMAZING</br>
    <hr>
    </div>  

    <div class="Instagram-card-footer">
      <a class="footer-action-icons"href="#"><i class="fa fa-heart-o"></i></a>
      <input class="comments-input" type="text" placeholder="Add a comment..."/>
      <a class="footer-action-icons"href="#"><i class="fa fa-ellipsis-h"></i></a>
    </div>

  </div> -->


  <?php

// $user_id = $_SESSION['user_details']['user_id'];
$query = "SELECT * FROM `posts` join `users` USING (`user_id`)";
// $userDetails =$_SESSION['user_details'];
$post= $connectDb->query($query);
// $p = $post->fetch_assoc();
// print_r($p);
if ($post->num_rows>0){
    // echo json_encode($post->fetch_assoc());
	while($postDetails=$post->fetch_assoc()){
        // echo json_encode($postDetails);
		if($postDetails){
			$_SESSION['post_details']=$postDetails;
			// print_r($postDetails);
            echo "<div class='Instagram-card mt-3'>
            <div class='Instagram-card-header'>
            <img src='uploads/{$postDetails['profile_pic']}'class='Instagram-card-user-image'>
            <a class='Instagram-card-user-name' href='https://www.instagram.com/rogersbase/'> </i> {$postDetails ['user_name'] }</a>
            <div class='Instagram-card-time'><i class='fa fa-ellipsis-h'></i></div>
            </div>

            <div class='d-block Instagram-card-image mt-3'>
            <img src= 'post_image/{$postDetails['post_img']}' class='w-100 h-100  hig' />
            </div>

            <div class='Instagram-card-content'>
            <p class='Likes'>640 views </br> {$postDetails['post_time']}</p>
            <p><a class='Instagram-card-content-user'></a>
            <b> {$postDetails['post_details']}🎉</b></p>
            <p class='comments'>This is beautiful</p>
            
            <hr>
            </div>  

            <div class='Instagram-card-footer'>
            <a class='footer-action-icons'href='#'><i class='fa fa-heart-o'></i></a>
            <input class='comments-input' type='text' placeholder='Add a comment...'/>
            <a class='footer-action-icons'href='#'><i class='fa fa-ellipsis-h'></i></a>
            </div>

        </div>";
		}}}
  ?>


  


  
  
<div class="loader"></div>


</body>
</html>
