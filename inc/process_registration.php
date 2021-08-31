<?php 


if(isset($_POST['add_user'])){

	$name = htmlspecialchars($_POST['name']);
	$email = $_POST['email'];
	$cont = $_POST['phone'];
	$userType = $_POST['userType'];
	$pword = $_POST['password'];

	include("model.php");
	$pdo = new Query();
	if($pdo->save_user($email, $pword, $name, $cont, $userType)){
		if($userType == "Admin"){
			echo "<script>window.location = '../users.php'</script>";
		}else{
			echo "<script>window.location = '../template.php'</script>";
		}
	}else{

	};
}