

<!-- Modal -->
<div class="modal fade" id="add_admin"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h5 class="text-primary mb-2">Add Administrator To Site</h5>
        </center>
          <form action="inc/process_registration.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">

            <p class="mb-0 mt-3"> <small>Supply the admin name</small></p>
            <input type="text" name="name" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon1" required>

            <p class="mb-0 mt-3"> <small>Admin Phone #</small></p>
            <input type="text" name="phone" class="form-control" placeholder="required" aria-label="title" aria-describedby="basic-addon1" required>

            <p class="mb-0 mt-3"> <small>Admin email</small></p>
            <input type="text" name="email" class="form-control" placeholder="required" aria-label="title" aria-describedby="basic-addon1" required>

            <p class="mb-0 mt-3"> <small>Password</small></p>
            <input type="text" name="password" class="form-control" placeholder="required" aria-label="title" aria-describedby="basic-addon1" required>
            <input type="hidden" name="userType" value="Admin">
          </div>
            <div>
              <button class="btn btn-primary rounded-0 btn-sm mt-4 shadow-lg m-2" name="add_user">Add Admin</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>