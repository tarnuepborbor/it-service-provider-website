
<?php 
session_start();


if(isset($_SESSION['userType']) !== "user" && $_GET['id'] !== ""){
	

	include("inc/model.php");

	$table = $_GET['table'];
	$id = $_GET['id'];

	$pdo = new Query();

	if($pdo->delete_item($table, $id)){
		header("location: dashboard.php");

}else{
	header("location: index.php");
}

}