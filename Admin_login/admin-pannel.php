<?php

session_start();
if (!isset($_SESSION['First_Name'])) {
  // code...
  header('Location:admin-login.php');
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="profile.css">


  <title>Profile</title>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .brand-name {
      font-size: 25px;
      font-weight: 700;
      font-style: oblique;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .image_section{
  padding:  20px 0;
}
.image_section>img{
border-radius: 50%;
max-height: 150px;

}

.h55 {
font-size: 25px;
margin-top: 3px;
font-weight: 400;
}


.profile_table_section_color {
background-color: #eaf1f5;
margin-top: 10px;
border-radius: 10px;
box-shadow: 2px 4px 20px 0 rgba(0,0,0,-1.9);
}
  </style>
</head>

<body>

  <!-- Default Start -->


  <!-- default end -->

  <section class="profile-section">
    <div class="row">
      <!--  -->
      <div class="col-lg-3">
        <main>
          <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">

            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              
              
              <span class="fs-4 brand-name">Blog</span>
            </a>

            <hr>
            <!--  -->
            <ul class="nav nav-pills flex-column mb-auto " style="height: 600px;">

              <li class="nav-item">
                <a href="admin-index.php" class="nav-link link-dark">
                  <span class="c-icon"><i class="fa-solid fa-house-user"></i></span>
                  My Blog
                </a>
              </li>

              <li >
                <a href="admin-pannel.php" class="nav-link link-dark">
                  <span class="c-icon"><i class="fa-solid fa-table "></i></span>
                  My Profile
                </a>
              </li>
              <li>
                <a href="add-post.php" class="nav-link link-dark">
                  <span class="c-icon"><i class="fa-solid fa-house-user"></i></span>
                  Add Post
                </a>
              </li>
            
            </ul>
            <!--  -->
            <hr>

            <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?php echo $_SESSION['First_Name']; ?></strong>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> -->
                <li><a class="dropdown-item" href="admin-pannel.php">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="admin-logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </main>
      </div>
      <!--  -->
      <div class="col-lg-7 profile_table_section_color">
                <div class="profile_table_section mt-3">
                    <div class=" text-center ">
                        <h3 class="bg-dark p-3"> <span style="color:#fff">Welcome To Admin Pannel</span> </h3>
                        

                    </div>
                    <div class="card profile_table_section_color">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3"><h2>Full Name</h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['First_Name']; ?> <?php echo $_SESSION['Last_Name']; ?></h5></div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Email</h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['Email']; ?></h5></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Birthdate </h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['Birthdate']; ?></h5></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Phone </h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['Phone_number']; ?></h5></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Institute </h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['Institute_Name']; ?></h5></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
      <div class="col-lg-3"></div>
    </div>


  </section>

  





  <script src="./sidebars.js"></script>


  <!-- Optional JavaScript -->
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>