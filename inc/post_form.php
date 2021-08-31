

<!-- Modal -->
<div class="modal fade bg-dark" id="exampleModal" style="background:linear-gradient(135deg, #f1d20f 0%,#e77725 100%);" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="text-secondary mb-2">Make post on your website</h3><hr>
        </center>
          <form action="dashboard.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">

            <p class="mb-0 mt-3"> <small>Give your post a title</small></p>
            <input type="text" name="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon1" required>

            <p class="mb-0 mt-3"> <small>Cover/Preview Image. This will show on the website</small></p>
            <input type="file" name="coverImg" class="form-control" placeholder="coverImg" accept="image/*" aria-label="coverImg" aria-describedby="basic-addon1"  onchange="document.getElementById('imgOutput').src = window.URL.createObjectURL(this.files[0])" required>

            <p class="mb-0 mt-3"> <small>Zip file</small></p>
            <input type="file" name="zipfile" class="form-control" placeholder="coverImg" accept=".zip,.rar,.7zip" aria-label="coverImg" aria-describedby="basic-addon1" required>


              <p class="mb-0 mt-3"> <small>Category of post</small></p>
              <select class="form-control" name="category" required>
                <option value="">Choose...</option>
                <option value="Graphic Design">Graphic</option>
                <option value="Msword Template">Msword Template</option>
                <option value="Web Design">Web Design</option>
                <option value="Video">Video Editing</option>
              </select>

          </div>

          <div class="col-md-6">
            <div class="card-body m-3 shadow-sm">
              <img src="" id="imgOutput" class="img-fluid img-responsive img-thumbnail">
              <small>Make sure your image is sized 335 height for proper display. Else it'll be shrank for responsivevity</small>
            </div>
          </div>

          <div class="card-header m-2 shadow-lg">
            <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
            <textarea name="editor1" id="editor1" rows="10" cols="100" required ></textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
              </script>
            </div>


            <div>
              <button class="btn btn-primary rounded-0 btn-lg mt-4 shadow-lg m-2" name="publish">Publish To Web</button>
            </div>

          </div>

        </form>



        </div>
      </div>
    </div>
  </div>