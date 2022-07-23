<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/daa33ecf5c.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
  <link rel="stylesheet" href="signin.css">
</head>
<body>

<div class="container">
    <div class="box">
      <div class="heading mt-5"></div>
      <form class="login-form mt-2" action="signin.php" method="post">
        <div class="field">
          <input
            id="username"
            type="name" name="email"
            placeholder="Phone number, username, or email"
          />
          <label for="username">Phone number, username, or email</label>
        </div>
        <div class="field">
          <input id="password" name="password" type="password" placeholder="password" />
          <label for="password">Password</label>
        </div>
        <div class="text-danger text-center">
              <?php
                   session_start();
                   if(isset($_SESSION['details_error'])){
                     echo $_SESSION['details_error'];
                   }
              ?>
              </div>
          <button class="login-button mt-2 mb-3 rounded" title="login" name="submit" type="submit">Log In</button>
          <div class="separator">
            <div class="line"></div>
            <p>OR</p>
            <div class="line"></div>
          </div>
        <div class="other">
          <button class="fb-login-btn" type="button">
            <i class="fa fa-facebook-official fb-icon"></i>
            <span class="">Log in with Facebook</span>
          </button>
          <a class="forgot-password" href="#">Forgot password?</a>
        </div>
      </form>
    </div>
    <div class="box">
      <p>Don't have an account? <a class="signup" href="signup.html">Sign Up</a></p>
    </div>
    <?php 
     session_unset();

    ?>

  </div>
</body>
</html>