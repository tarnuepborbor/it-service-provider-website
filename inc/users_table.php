<?php
  include_once("model.php");
  $pdo = new Query();
  $admins = $pdo->load_admins_in_table();
  $subscribers = $pdo->load_subscribers_in_table();
?>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Subscribers Table</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Admin Table</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>USERS</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <table id="example" class="table table-striped  table-bordered table-sm" >
      <thead class="mt-4" >
          <tr>
            <th>Name</th>
            <th>contact</th>
            <th>occupation</th>
            <th>Delete</th>
          </tr>
        </thead>
      </tfoot>
      <tbody>
        <?php 
        while ($rows = $subscribers->fetch()) {
          ?>
          <tr>
            <td><?php echo $rows['userName']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['phone']; ?></td>
            <td><a  class="btn btn-sm btn-danger" href="deletor.php?id=<?php echo $rows['id'] ?>&table=users"> <i class="fa  fa-trash text-white " aria-hidden="true">Delete</i></a></td>
          </tr>
          <?php 
        }
        ?>
        <tfoot>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Delete</th>
          </tr>
        </tfoot>

      </tbody>
    </table>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>ADMINS TABLE</h3>
      <div class="table-responsive">
        <table id="example" class="table table-striped  table-bordered table-sm" >
        <thead class="mt-4" >
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Delete</th>
          </tr>
        </thead>
      </tfoot>
      <tbody>
        <?php 
        while ($rows = $admins->fetch()) {
          ?>
          <tr>
            <td><?php echo $rows['userName']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['phone']; ?></td>
            <td><a  class="btn btn-sm btn-danger" href="deletor.php?id=<?php echo $rows['id'] ?>&table=users"> <i class="fa  fa-trash text-white " aria-hidden="true">Delete</i></a></td>
          </tr>
          <?php 
        }
        ?>
        <tfoot>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Delete</th>
          </tr>
        </tfoot>

      </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
