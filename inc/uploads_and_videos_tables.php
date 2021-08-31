<?php
  include_once("model.php");
  $pdo = new Query();
  $videos = $pdo->load_videos_in_table();
?>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Templates</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Video lessons</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Uploaded templates table</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="table-responsive " >
      <table id="example" class="table table-striped  table-bordered table-sm" >
        <thead class="mt-4" >
          <tr>
            <th>Post Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>View</th>
            <th>Delete</th>
          </tr>
        </thead>
      </tfoot>
      <tbody>
        <?php 
        $data = new Query();
        $posts = $data->select_post_in_admin_table();
        while ($rows = $posts->fetch()) {
          ?>
          <tr>
            <td><?php echo $rows['title']; ?></td>
            <td><?php echo $rows['category']; ?></td>
            <td><?php echo $rows['postDate']; ?></td>
            <td><a class="btn btn-success" href="download.php?postid=<?php echo $rows['id'] ?>&table=post"><i class="fa  text-white fa-eye" aria-hidden="true"></i>View</a></td>
            <td><a  class="btn btn-danger" href="deletor.php?id=<?php echo $rows['id'] ?>&table=post"> <i class="fa  fa-trash text-white " aria-hidden="true">Delete</i></a></td>
          </tr>
          <?php 
        }
        ?>
        <tfoot>
          <tr>
            <th>Post Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>View</th>
            <th>Delete</th>
          </tr>
        </tfoot>

      </tbody>
    </table>
  </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Uploaded youtube videos</h3>
      <div class="table-responsive">
        <table id="example" class="table table-striped  table-bordered table-sm" >
        <thead class="mt-4" >
          <tr>
            <th>Title</th>
            <th>Watch</th>
            <th>Delete</th>
          </tr>
        </thead>
      </tfoot>
      <tbody>
        <?php 
        while ($rows = $videos->fetch()) {
          ?>
          <tr>
            <td><?php echo $rows['title']; ?></td>
            <td><a  class="btn btn-sm btn-outline-primary" href="deletor.php?id=<?php echo $rows['id'] ?>&table=users"> <i class="fa  fa-trash text-white " aria-hidden="true">Watch</i></a></td>

            <td><a  class="btn btn-sm btn-danger" href="deletor.php?id=<?php echo $rows['id'] ?>&table=videotable"> <i class="fa  fa-trash text-white " aria-hidden="true">Delete</i></a></td>
          </tr>
          <?php 
        }
        ?>
        <tfoot>
            <tr>
            <th>Titpe</th>
            <th>Watch</th>
            <th>Delete</th>
          </tr>
        </tfoot>

      </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
