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
              <a class="navbar-brand" href="#">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="blog-post.php">My Blog</a>
                  </li>
                 
                </ul>
               
                    <a class="btn btn-primary" href="#"><?php echo $_SESSION['username']; ?>
                   
                  
                    </a>
                  
                    
                 
                
              </div>

            </div>
          </nav>
    </section>

    <!-- Blog Add -->
    <div class="container mt-5">

        
        

        <!-- Create a new Post button -->
        <?php
                            include '../config/dbconnection.php';

                            


                            $sql = "select * from blogpost ";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while ($row = $result->fetch_assoc()) {
                            ?>
                                        <?php

                                        
                                echo '     
                                           <div class="card  mt-3 " style="width: 30rem; display:inline;">
                                           <a href="#" style="text-decoration:none;"><h3 class="ml-1">'. $row["Id"] .'. '. $row["Title"] .'</h3></a>
                                                      
                                                      
                                
                                                    
                                                      </div>';
                              }
                            }
                            else {
                              echo "0 results";
                            }


                            $con->close();


                       ?>
                       

        
       
    </div>

    <script>

    </script>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>