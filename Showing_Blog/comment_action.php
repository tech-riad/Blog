

          
                        <div class="row d-flex justify-content-right">
              <div class="col-md-8 col-lg-6">
                <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                  <div class="card-body p-4">
                     
                             

                    <form action="#" method="POST">
                    <div class="form-outline mb-4">
                      <input type="text" name="comenterName"  class="form-control mb-1" placeholder="Your Name" />
                      <input type="text" name="note" id="addANote" class="form-control" placeholder="Type comment..." />
                      <label class="form-label" for="addANote">+ Add a note</label><br>
                      <button class="btn btn-success" name="addComment">Save</button>
                    </div>
                    </form>

                    <div class="card mb-4">
                      <div class="card-body">
                        <p>Type your note, and hit enter to add it</p>

                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                              height="25" />
                            <p class="small mb-0 ms-2">Martha</p>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <p class="small text-muted mb-0">Upvote?</p>
                            <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                            <p class="small text-muted mb-0">3</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            $sql = "SELECT * FROM comment where id=$post_id";
                            $sqlquery = mysqli_query($con,$sql);

                            while ($post=mysqli_fetch_assoc($sqlquery)) {