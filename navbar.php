


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
  <link rel="stylesheet" href="navbar.css">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <a class="navbar-brand" href="#">
              <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png"
                height="30" alt="" loading="lazy" />
            </a>
          </div>
          <div class="col-md-3">
            <form class="d-flex input-group">
              <input type="search" class="form-control bg-light " style="border:none;"  placeholder="Search" aria-label="Search" />
            </form>
          </div>
          <div class="col-md-3">
            <ul class="navbar-nav justify-content-center">
              <!-- Icons -->
              <li class="nav-item ml-2 
              me-3 me-lg-0">
                <a class="nav-link" href="usersdashbord.php">
                  <i class="fas fa-home fa-lg text-dark"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#">
                  <i class="fas fa-paper-plane fa-lg text-dark"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
              <button type="button" class="bg-transparent" style="border:none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><a class="nav-link"><i class="fa fa-plus-square fa-lg text-dark"></i>
                  </a>
             </button>
              
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#">
                  <i class="far fa-compass fa-lg text-dark"></i>
                </a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#">
                  <i class="far fa-heart fa-lg text-dark"></i>
                </a>
              </li>
              <!-- Avatar -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-hidden="true">
                  <img src='<?php echo "uploads/{$userDetails['profile_pic']}" ?>' class="rounded-circle" height="25" width="25" alt=""
                    loading="lazy" />
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="profile.php">My profile</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="signinn.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create a new post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="post.php" method="post" enctype="multipart/form-data">
        <textarea type="text" name="post" id="" class="form-control my-2 h-25" style="height: 50vh !important;"></textarea>
                    <input type="file" class="form-control my-2" name="myFile">
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





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Navbar -->
</body>
</html>