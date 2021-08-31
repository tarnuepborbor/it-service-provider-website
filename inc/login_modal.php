
<!-- Modal -->
<div class="modal fade bg-light"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog shadow-lg" >
    <div class="modal-content">
  
      <div class="modal-body bg-transparent">
        
       
        <div class="card-header text-left bg-white" style="border: none;">
          <h3 class="display-4"><strong>Log in</strong></h3>
        </div>
        <form method="POST" action="inc/validate_login.php">
          <div class="card-body text-center" style="padding-bottom: 100px">
            <div class="row text-left align-items-center ">
              <div class="col-12 lead"><strong>Email</strong></div>
            </div>
            <input type="email" name="email" placeholder="Email" class=" text-primary form-control form-control-lg rounded-0 pl-4 required" />
            <div class="row text-left align-items-center mt-4 strong">
              <div class="col-12 lead"><strong>Password</strong></div>
            </div>
            <input type="password" name="password" placeholder="Password" class="text-primary bg-transparent text-primary form-control mb-4 form-control-lg rounded-0 pl-4 required">
            <div>
               <button name="login" name="login" class="btn btn-lg btn-lg"  style="margin-top: 50px; border-radius: 30px; width:100%; color: white; font-size: 25px; font-weight: bold; background-color: #04aa6d;">Login</button>
            </div>
            <a href="#" class="text-secondary mt-2" style="">Forgot password</a>
          </div>
        </form>
     


      </div>
    </div>
  </div>
</div>

