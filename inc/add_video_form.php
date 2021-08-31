

<!-- Modal -->
<div class="modal fade bg-light" id="add_video"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="text-secondary mb-2">Post video on your website</h3><hr>
        </center>
          <form action="dashboard.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">

            <p class="mb-0 mt-3"> <small>Give your video a title</small></p>
            <input type="text" name="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon1" required>
            <p class="mb-0 mt-3"> <small>Video Link (from youtube)</small></p>
            <input type="text" name="link" class="form-control" placeholder="Video link" aria-label="title" aria-describedby="basic-addon1" required>
          </div>
          <div class="card-header m-2 shadow-lg">
            <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
            <textarea name="editor2" id="editor1" rows="10" cols="100" required ></textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor2' );
              </script>
            </div>
            <div>
              <button class="btn btn-primary rounded-0 btn-lg mt-4 shadow-lg m-2" name="publish_video">Publish To Web</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>