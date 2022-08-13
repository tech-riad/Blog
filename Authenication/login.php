<?php 
  session_start();

  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body class="bg-info">

    <!-- HEader Section -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="../index.php">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                  </li>

                 
                </ul>
               
                    <a class="btn btn-primary" href="login.php">Register/Login</a>
                    
                 
                
              </div>

            </div>
          </nav>
    </section>

    <!-- Login Form -->

    <div>
                    <?php

                      include '../config/dbconnection.php';
                      
                      
                      

                      if (isset($_POST['submit'])) {
                          // code...
                          $email = $_POST['email'];
                          $password = $_POST['password'];

                          $email_search = "select * from registration where Email='$email'";

                          $search_query = mysqli_query($con,$email_search);
                          $email_count = mysqli_num_rows($search_query);

                          if ($email_count) {
                              // code...
                              $email_pass = mysqli_fetch_assoc($search_query);
                              $db_pass = $email_pass['password'];

                              // Session Login
                              $_SESSION['username'] = $email_pass ['username'];
                              $_SESSION['name'] = $email_pass ['name'];
                              $_SESSION['email'] = $email_pass ['email'];
                              $_SESSION['user_id'] = $email_pass ['user_id'];
                              
                              
                              
                            
                              $password_decode = password_verify($password, $db_pass);

                              if ($password_decode) {
                                  // code...
                                  

                                  header('Location:../config/main.php');

                              }else{
                                  echo "Password Incorrect";
                              }
                              }else{
                                  echo "Invalid Email";
                              }
                              
                          }


                    ?>

    </div>

    <section class="Login-section">
        <div class="card login-form ">
            <div class="card-body ">
              <h1 class="card-title text-center">LOGIN</h1>
              <div class="card-text">

                <form action="login.php" method="POST">
                    <div class="form-group">
                      <label for="formGroupEmaill">Email</label>
                      <input type="email" name="email" class="form-control form-control-sm input-type" id="formGroupEmaill" placeholder="email">
                    </div>

                    <div class="form-group mt-1">
                      <label for="formGroupPassword">Password</label>

                      <input type="password" name="password" class="form-control form-control-sm input-type" id="formGroupPassword" placeholder="password">
                      <span class="passForgot"><a href="#" >Forgot Password?</a></span>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block submit-button mt-5">
                        Log In
                    </button>

                    <div class="sign-up">
                        Don't have an account? <a href="register.php">Sign Up</a>
                    </div>
                  </form>
                  
              
              
            </div>
          </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>