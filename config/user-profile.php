<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
  // code...
  header('Location:../index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <section class="profile-section ">
    <div class="container">
    <div class="row">
      <!--  -->
      <!--  -->
      <div class="col-lg-7 profile_table_section_color">
                <div class="profile_table_section mt-3">
                <div class=" " style="display:inline-block; ">
                        
                        <a href="main.php" style="text-decoration:none;"><h3 class="bg-success p-3"> <span style="color:#fff;">Home</span> </h3></a>
                        

                    </div>
                    
                    <div class=" text-center ">
                        
                        <h3 class="bg-dark p-3"> <span style="color:#fff">Welcome User <?php echo $_SESSION['username']; ?> </span> </h3>
                        

                    </div>
                    <div class="card profile_table_section_color">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3"><h2>User Name</h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['username']; ?> </h5></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>User Id</h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['user_id']; ?>  </h5></div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Name</h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['name']; ?></h5></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3"><h2>Email </h2></div>
                                <div class="col-lg-9 pt-1"><h5 class="h55"><?php echo $_SESSION['email']; ?></h5></div>
                            </div>
                            <hr>
                            

                        </div>
                    </div>

                </div>
            </div>
      <div class="col-lg-3"></div>
    </div>
    </div>


  </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>