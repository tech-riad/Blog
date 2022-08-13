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
              <a class="navbar-brand" href="../config/main.php">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../config/main.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Recent Blog</a>
                  </li>
                 
                </ul>

                <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                
                <strong class="btn btn-primary"><?php echo $_SESSION['username']; ?></strong>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> -->
                <li><a class="dropdown-item" href="logined_profile.php">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../config/logout.php">Sign out</a></li>
              </ul>
            </div>
               
                    
                  
                    
                 
                
              </div>

            </div>
          </nav>
    </section>

    <!-- Blog Add -->
    <section>
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
              <img src="../Admin_login/<?=$post['Image']?>" class="card-img-top" style="max-width:80%" alt="...">
              <div class="card-body">
                <h4 class="card-title"><?=$post['Title']?></h4><br>
                <p class="card-text"><?=$post['Description']?></p>
                
              </div>
            </div>
            <hr>
            <!-- Comment Section -->
            <!-- Comment Action -->
                        <div class="row d-flex justify-content-right">
                            <div class="col-md-8 col-lg-6">
                              <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                                <div class="card-body p-4">
                                  <?php 
                                  $post_id=$_GET["post_id"];
                                  if(isset($_POST['addComment'])){
                                    $comenterName = mysqli_real_escape_string($con, $_POST['comenterName']);
                                    $note = mysqli_real_escape_string($con, $_POST['note']);

                                    $insertquery = "INSERT INTO comment (Name,Comment,posT_id)
                                                  values('$comenterName','$note','$post_id')";

                                                  $iquery = mysqli_query($con, $insertquery);

                                                  if ($iquery) {
                                                    // code...
                                                    header('Location: .full_post.php?post_id=<?=$post["Id"]?>.');
                                                  
                                                    
                                                  }

                                  }

                                  ?>
                                  
                                          

                                  <form action="#" method="POST">
                                  <div class="form-outline mb-4">
                                    <input type="text" name="comenterName"  class="form-control mb-1" placeholder="Your Name" />
                                    <input type="text" name="note" id="addANote" class="form-control" placeholder="Type comment..." />
                                    <label class="form-label" for="addANote">+ Add a note</label><br>
                                    
                                    <button class="btn btn-success" name="addComment">Save</button>
                                  </div>
                                  </form>
                                  <!--  -->
                                  <div class="card mb-4">
                                      <div class="card-body">
                                        <?php 

                                         $sql = "SELECT * FROM comment where posT_id =$post_id";
                                         $sqlquery = mysqli_query($con,$sql);
             
                                         while ($post=mysqli_fetch_assoc($sqlquery)) {

                                          ?>
                                           <div class="row">
                                          <div class="row">
                                            
                                            <h4 class=""><?=$post['Name']?></h4><br>

                                            <p class=""><?=$post['Comment']?></p>
                                            <hr>

                                          </div>
                                          
                                        </div>
                                          <?php 
                                          


                                         }
                                        
                                        ?>
                                        

                                       
                                      </div>
                                    </div>
                                  <!--  -->

                     
                                 </div>
                              </div>
                            </div>
                        </div>

                       
                                
            




           
            
    </section>






    

    <script src="../Admin_login/sidebar.js"></script>
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>