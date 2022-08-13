<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>

  <?php
  include '../config/dbconnection.php';
  ?>

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

    <!-- Register Form -->

    <div>
    <?php
                            include '../config/dbconnection.php';

                            if(isset($_POST['submit'])){

                              $username = mysqli_real_escape_string($con, $_POST['username']);
                              $name = mysqli_real_escape_string($con, $_POST['name']);
                              $email = mysqli_real_escape_string($con, $_POST['email']);
                              $password = mysqli_real_escape_string($con, $_POST['password']);

                              $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                              $checkuid = "SELECT * FROM `registration` ORDER BY Id DESC LIMIT 1";
                              $checkresult = mysqli_query($con,$checkuid);
                              if ($row = mysqli_fetch_assoc($checkresult)) {
                                // code...
                                $uid = $row['user_id'];
                                $get_numbers = str_replace("SR", "", $uid);
                                $id_increase = $get_numbers+1;
                                $get_string = str_pad($id_increase, 2, 0, STR_PAD_LEFT);
                                $id= "$username".$get_string;




  }
                              
                              

                              $email_query = "select * from registration where Email = '$email' ";
                                $query = mysqli_query( $con,$email_query);

                              

                              $email_count = mysqli_num_rows($query);


                              if ($email_count>0) {
                                // code...
                                 
                                        
                                      
                              
                                header('Location:register.php');


                              }else {

                              $insertquery = "INSERT INTO registration(username,name,email,password,user_id)
                                    values('$username','$name','$email','$hashed_password','$id')";

                                    $iquery = mysqli_query($con, $insertquery);

                                    if ($iquery) {
                                      // code...

                                     
                                    
                                      header("Location:login.php");
                                    }

                                    
                              }
                            }


                 ?>
    </div>

    <section>
        <div class="container-fluid bg-info">
            <div class="row  ">
              <div class="col-md-3">
                <form action="register.php" method="POST">

               

                    <div class="mb-3">
                      <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                      <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name<span class="text-danger"> *</span></label>
                      <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email<span class="text-danger"> *</span></label>
                      <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Password<span class="text-danger"> *</span></label>
                      <input type="password" id="password" name="password" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <h4>Already Registered? <a href="login.php">Login</a></h4>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                      <button type="submit" name="submit" class="btn btn-secondary btn-lg">Register</button>
                    </div>
                </form>
              
              </div>
            </div>
          </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>

