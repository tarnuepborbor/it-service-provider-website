<?php 
include('inc/admin_header.php');
include('inc/admin_navbar.php');
include('inc/model.php');

?>

<div id="main">
	<button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
	
	<div class="container shadow-sm p-3 mt-3" style="width: 100%;">
		<div class="row">
			<div class="col-md-10 col-md-1">
				<h2 class="text-secondary"></i>Messages From Visitors</h2>
				<p class="lead">Below are the last 20 messages from your visitors.</p>
			</div>

			<div class="card">
				<h3 class="text-primary">Messages</h3><hr>

				<?php 
				$pdo = new Query();
				$data = $pdo->view_messages();

				while($rows = $data->fetch()){
					?>
					<div class="card bg-light mb-2">
						<div class="card-body">
							<p class="lead"><strong><?php echo $rows['name'] ?>:<br> </strong> <?php echo $rows['message'] ?>
						<br>
						<strong>Contact: +231 <?php echo $rows['contact'] ?></strong></p>
						</div>
					</div>
					<?php 
				}
				?>
			</div>
		</div>
		
	</div>

</div>

<?php 
include('inc/admin_footer.php');
