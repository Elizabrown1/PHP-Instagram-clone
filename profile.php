<?php
session_start();
$userDetails =$_SESSION['user_details'];
$postDetails =$_SESSION['post_details'];
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
    <script src="https://kit.fontawesome.com/daa33ecf5c.js" crossorigin="anonymous"></script>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/daa33ecf5c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
<main>

<header>

	<div class="container col-8">

		<div class="profile">

			<div class="profile-image">
            <button type="button" class="bg-transparent" style="border:none;" data-bs-toggle="modal" data-bs-target="#exampleModal1">
             <img class="pro" src='<?php echo "uploads/{$userDetails['profile_pic']}" ?>' alt="">
               </button>

			</div>

			<div class="profile-user-settings">

				<h1 class="profile-user-name"><?php echo $userDetails ['full_name']  ?></h1>

				<button class="btn profile-edit-btn">Edit Profile</button>

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">164</span> posts</li>
					<li><span class="profile-stat-count">188</span> followers</li>
					<li><span class="profile-stat-count">206</span> following</li>
				</ul>

			</div>

			<div class="profile-bio">

				<p><span class="profile-real-name"><?php echo $userDetails ['full_name']  ?></span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>

			</div>

		</div>
		<!-- End of profile section -->

	</div>
	<!-- End of container -->

</header>

<div class='container col-9'>

    <div class='gallery'>
<?php
$user_id = $_SESSION['user_details']['user_id'];
$query = "SELECT * FROM `posts` WHERE user_id = '$user_id'";
// $query = "SELECT * FROM `posts` join `users` USING (`user_id`)";
// $userDetails =$_SESSION['user_details'];
$post= $connectDb->query($query);
if ($post->num_rows>0){
	while($postDetails=$post->fetch_assoc()){
		if($postDetails){
			$_SESSION['post_details']=$postDetails;
			// print_r($postDetails);
            echo"


        <div class='gallery-item' tabindex='0'>

            <img src= 'post_image/{$postDetails['post_img']}'class='gallery-image' alt=''>

            <div class='gallery-item-info'>

                <ul>
                    <li class='gallery-item-likes'><span class='visually-hidden'>Likes:</span><i class='fas fa-heart' aria-hidden='true'></i> 56</li>
                    <li class='gallery-item-comments'><span class='visually-hidden'>Comments:</span><i class='fas fa-comment' aria-hidden='true'></i> 2</li>
                </ul>

            </div>

        </div>
        

        
    
";
        }}}

        ?>




</div>
                
</div>


<div class="container col-9">

    <div class="gallery">

        <div class="gallery-item" tabindex="0">

            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">

            <div class="gallery-item-info">

                <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>

            </div>

        </div>


        

        <div class="gallery-item" tabindex="0">

            <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">

            <div class="gallery-item-info">

                <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
                </ul>

            </div>

        </div>

        <div class="gallery-item" tabindex="0">

            <img src="https://images.unsplash.com/photo-1423012373122-fff0a5d28cc9?w=500&h=500&fit=crop" class="gallery-image" alt="">

            <div class="gallery-item-type">

                <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

            </div>

            <div class="gallery-item-info">

                <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 30</li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                </ul>

            </div>

        </div>

    </div>
    <!-- End of gallery -->

    <div class="loader"></div>

</div>
<!-- End of container -->
<!-- Button trigger modal -->







<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change profile picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="fileprocess.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control" name="myFile">
                    <input type="submit" value="Submit" name="submit" class="form-control">
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</main>
</body>
</html>