

<!-- Modal -->
<div class="modal fade bg-light" id="profile"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-body">
          <table class="table">
            <tr>
              <td>Name</td>
              <td><?php echo $_SESSION['userName'] ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
              <td>Phone</td>
              <td><?php echo $_SESSION['phone'] ?></td>
            </tr>
            <tr>
              <td>Account Type</td>
              <td><?php echo $_SESSION['userType'] ?></td>
            </tr>
          </table>
        
        </div>
      </div>
    </div>
  </div>