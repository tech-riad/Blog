


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Blog</title>

    <link rel="stylesheet" href="index.css">
  </head>
  <body>

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
               
                    <a class="btn btn-primary" href="../Authenication/login.php">Register/Login</a>
                    
                 
                
              </div>

            </div>
          </nav>
    </section>

    <!-- Blog Add -->
    <div class="container mt-5">

        
        

        <!-- SHow Post Post -->
        <?php 
        include '../config/dbconnection.php';
        $post_id=$_GET["post_id"];
        $sql = "SELECT * FROM blogpost where id=$post_id";
        $sqlquery = mysqli_query($con,$sql);
        $post=mysqli_fetch_assoc($sqlquery);

        ?>

        <div class="card" style="width: 18rem; display:inline;">
          <img src="../Admin_login/<?=$post['Image']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title"><?=$post['Title']?></h4><br>
            <p class="card-text"><?=$post['Description']?></p>
            
          </div>
        </div>
                                        

                       

                        
                       

        
       
    </div>

    <div>


    </div>


    

    <script src="../Admin_login/sidebar.js"></script>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>