<?php 

if(!isset($_GET['postid'])){
	header("location: index.php");
}
include('inc/header.php');
include('inc/navbar.php');
include('inc/model.php');
$pdo = new Query();
$postid = $_GET['postid'];

$post = $pdo->get_a_post($postid);

?>

<!-- Page header with logo and tagline-->
<!-- <header class="py-5 bg-light border-bottom mb-4">
	<div class="container">
		<div class="text-center my-5">
			<h1 class="fw-bolder display-4 text-white">Mathematics4you</h1>
			<p class="lead mb-0 text-white">we teach mathematics for everyone can understan and learn</p>
		</div>
	</div>
</header>
-->


<div class="container">
	<div class="row mt-4 pt-4">
		<!-- Blog entries-->
		<div class="col-lg-8">
			<!-- Featured blog post-->
			<?php 
			while ($row = $post->fetch()) {
				?>

				<div class="card mb-4" style="box-shadow: none;">
					<img class="card-img-top img-thumbnail" src="assets/<?php echo $row['coverImg'] ?>" alt="..." />
					<div class="card-body">
						<div class="small text-muted">January 1, 2021</div>
						<h2 class="card-title h4"><?php echo $row['title'] ?></h2>
						<?php echo $row['description'] ?>...<br>
						<?php 
							// if user is logged in display download btn else register
							if(isset($_SESSION['isLogin'])&& $_SESSION['isLogin'] !== false){
								?> <a class='btn btn-primary' href="assets/<?php echo $row['zipfile']; ?>">Download</a>;
								<?php 
							}else{
								echo "<button class='btn btn-danger rounded-0' data-toggle='modal' data-target='#add_admin'>Register to download</button>";
								echo "<button class='btn btn-primary rounded-0' data-toggle='modal' data-target='#exampleModal'>Alrady have account signin</button>";
							
							}
						?>
					</div>
				</div>

				<?php 
			}
			?>
		</div>
		<!-- Side widgets-->
		<div class="col-lg-4">
			<!-- Search widget-->
			<div class="card mb-4">
				<div class="card-header">Search</div>
				<div class="card-body">
					<div class="input-group">
						<input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
						<button class="btn btn-primary" id="button-search" type="button">Go!</button>
					</div>
				</div>
			</div>
			<!-- Categories widget-->
			<?php 
				$data = $pdo->load_few_template();

				while ($row = $data->fetch()) {
					?>
						<div class="card mb-4">
							<a href="download.php?postid=<?php echo $row['id'] ?>"><img style="height: 335px" class="card-img-top" src="assets/<?php echo $row['coverImg'] ?>" alt="..." /></a>
						</div>
					<?php 
				}

			?>
		</div>
	</div>
</div>

<?php 
include('inc/login_modal.php');
include('inc/register_form.php');
include('inc/footer.php');