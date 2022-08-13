<?php

session_start();


?>


<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

  <div>
  <?php

include '../config/dbconnection.php';

if (isset($_POST['submit'])) {
    // code...
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from adminregistration where Email='$email'";

    $search_query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($search_query);

    if ($email_count) {
        // code...
        $email_pass = mysqli_fetch_assoc($search_query);
        $db_pass = $email_pass['Password'];

        // Session Login
        $_SESSION['First_Name'] = $email_pass ['First_Name'];
        $_SESSION['Last_Name'] = $email_pass ['Last_Name'];
        $_SESSION['Email'] = $email_pass ['Email'];
        $_SESSION['Birthdate'] = $email_pass ['Birthdate'];
        $_SESSION['Phone_number'] = $email_pass ['Phone_number'];
        $_SESSION['Institute_Name'] = $email_pass ['Institute_Name'];
       
        $password_decode = password_verify($password, $db_pass);

        if ($password_decode) {
            // code...
            echo "login successful";

            header('Location:admin-pannel.php');

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
              <h1 class="card-title text-center">ADMIN LOGIN</h1>
              <div class="card-text">

                <form action="admin-login.php" method="POST">
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
                        Don't have an account? <a href="#">Sign Up</a>
                    </div>
                  </form>
                  
              
              
            </div>
          </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>