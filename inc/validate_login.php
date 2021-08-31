
<?php 


if(isset($_POST['login'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 0;
  } else {
    $email_error = "Your email is not valid";
    $error = 1;
  }


  include("model.php");

  $loginobj = new Query();

  if($error !== 1){

    if($loginobj->login($email, $password) > 0 ){
      session_start();

      $user_data = $loginobj->users_info($email);

      while ($row = $user_data->fetch()) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['userType'] = $row['userType'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['userId'] = $row['id'];
      }

      $_SESSION['isLogin'] = true;

      echo "<script>window.location = '../dashboard.php'</script>";

    }else{
      echo "<script>alert('Your credentials does not match any user of our system')</script>";
    }
  }



}

?>