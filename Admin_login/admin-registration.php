<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300&family=Roboto+Slab:wght@100;200;300;400;500&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="./registration.css">


    <title>Admin Registration</title>
</head>

<body >

    <div>
    <?php

include '../config/dbconnection.php';

if (isset($_POST['submit'])) {

  $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $dob = mysqli_real_escape_string($con, $_POST['dob']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
  $instituteName = mysqli_real_escape_string($con, $_POST['instituteName']);

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $email_query = "select * from adminregistration where Email = '$email' ";
  $query = mysqli_query( $con,$email_query);

  

  $email_count = mysqli_num_rows($query);


  if ($email_count>0) {
    // code...
    
   
    header('Location:admin-registration.php');


  }else {

  $insertquery = "INSERT INTO adminregistration(First_Name,Last_Name,Email,Password,Birthdate,Gender,Phone_number,Institute_Name)
        values('$firstName','$lastName','$email','$hashed_password','$dob','$gender','$phoneNumber','$instituteName')";

        $iquery = mysqli_query($con, $insertquery);

        if ($iquery) {
          // code...
          
          header("Location:admin-login.php");
        }

        
  }

}
?>
    </div>



    <!-- Register Form -->

    <section class="Registration-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card reg-form bg-success mt-5 ">
                <div class="card-body cd-style ">
                    <h1 class="card-title cd-title text-center">Admin Registration</h1>
                    <div class="card-text">
                        
                        <form action="admin-registration.php" method="POST">

                            <div class="form-group">
                                <label for="Name" class="label-c">Name</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-control-sm input-type mt-2" id="Name"
                                    placeholder="First Name" name="firstName" required>
                                
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control form-control-sm input-type mt-2" id="Name"
                                    placeholder="Last Name" name="lastName" required>
                                </div>
                            </div>
                            </div>
                            <!--  -->
                            <div class="form-group">
                                <label for="formGroupEmaill" class="label-c">Email</label>
                                <input type="email" class="form-control form-control-sm input-type " id="formGroupEmaill"
                                    placeholder="email" name="email" required>
                            </div>
                            <!--  -->
                            <div class="form-group mt-1">
                                <label for="formGroupPassword" class="label-c">Password</label>
                                <input type="password" class="form-control form-control-sm input-type"
                                    id="formGroupPassword" placeholder="password" name="password" required>

                            </div>
                           
                            <!--  -->
                            <div class="form-group">
                                <label for="birthDate" class="label-c">Date Of Birth</label>
                                <input type="date" class="form-control form-control-sm input-type" id="birthDate" name="dob" required>
                            </div>
                            <!--  -->
                            <div class="form-group">
                                <label for="phoneNumber" class="label-c">Phone Number </label>
                                <input type="number" class="form-control form-control-sm input-type" id="phoneNumber"
                                    placeholder="Phone Number" name="phoneNumber" required>
                            </div>
                            <!--  -->
                            <label for="#" class="label-c">Gender</label>
                            <div class="form-check">
                                
                                
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="m">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="f" 
                                    >
                                <label class="form-check-label" for="flexRadioDefault2" >
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault3" value="o" 
                                    >
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Other
                                </label>
                            </div>
                            <!--  -->
                            <div class="form-group">
                                <label for="instituteName" class="label-c">Institute Name </label>
                                <input type="text" class="form-control form-control-sm input-type" id="instituteName"
                                    placeholder="Institute Name" name="instituteName" required >
                            </div>
                            <!--  -->
    
                            <button type="submit" name="submit" class="btn btn-primary btn-block submit-button mt-5" value="Register">
                                Register
                            </button>
    
                            <div class="sign-up">
                                Already Register? <a href="#"><span style="color:#fff;">Log In</span></a>
                            </div>
                        </form>
    
                        
    
    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
            </div>
        </div>
    </section>

    <!-- Footer-section -->
    

    <footer class="min-section-bg py-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-light"> &copy; All Right Reserved by Riad Ahmed </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>

</html>

