<?php 

include('inc/model.php');

if(isset($_POST['sent_message'])){
	
	$name = htmlspecialchars($_POST['name'];)
	$contact = $_POST['phone'];
	$message = htmlspecialchars($_POST['message'];)

	$pdo = new Query();
	if($pdo->save_message($name, $contact, $message)){
		include('inc/header.php');
		include('inc/navbar.php');
		?>
			<div class="jumbotron mt-4 py-4">
				<div class="container">
					<h1 class="display-4 text-success">Message Received!</h1>
					<p class="lead">Thank you very much for contacting our team. We will get back to you in the soonest possible time. </p>
					<a href='index.php' class="shadow-lg btn btn-lg btn-success rounded-0">Back to home </a>
				</div>
			</div>
		<?php 
	}


}else{
	echo "<script>window.location = 'index.php'</script>";
}