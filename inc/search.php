<?php 

if(isset($_POST['search'])){
	include('model.php');
	$pdo = new Query();
	$statement = $pdo->search_data($_POST['search']);

	$results = $statement->fetchAll();
	$json = json_encode($results);

	print_r($json);
}