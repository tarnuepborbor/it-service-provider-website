<?php 
include('inc/admin_header.php');
include('inc/admin_navbar.php');
include('inc/model.php');

?>

<div id="main">
	<button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
	
	<div class="container shadow-sm p-3 mt-3" style="width: 100%;">
		<div class="row">
			<div class="col-md-9">
				<h2 class="text-primary"></i>Upload History</h2>
				<p class="lead">The table below shows your upload history. It contains all the documents upload on your websites.</p>
			</div>
			<div class="col-md-3">
				<button class="btn text-white mb-2 shadow-lg btn-lg" class="nav-link"  data-toggle="modal" data-target="#exampleModal"  style="width: 100%; background:linear-gradient(135deg, #f2d50f 0%,#da0641 100%);"><i class="fa fa-2x fa-calendar-plus-o" aria-hidden="true"></i> Add Template</button>
				<button class="btn text-white mb-2 shadow-lg btn-lg" class="nav-link" data-toggle="modal" data-target="#add_video"  style="width: 100%; background:linear-gradient(135deg, #f2d50f 0%,#da0641 100%);"><i class="fa fa-2x fa-calendar-plus-o" aria-hidden="true"></i> Add Video</button>
			</div>
		</div>

		<?php 
include('inc/uploads_and_videos_tables.php');

		?>
		
</div>

</div>

<?php 
include('inc/post_form.php');
include('inc/add_video_form.php');
include('inc/profile.php');
include('inc/admin_footer.php');

if(isset($_POST['publish'])){


	$title = $_POST['title'];
	$category = $_POST['category'];
	$description = $_POST['editor1'];

	// process the cover image
	$coverPicLoc = $_FILES['coverImg']['tmp_name'];
	$coverPicName = $_FILES['coverImg']['name'];
	$coverImg = md5(time() . $coverPicName)."_".$coverPicName;
	$img_dir = "assets/".$coverImg;

	// zipfile processor
	$zipFile_loc = $_FILES['zipfile']['tmp_name'];
	$zipfileName = $_FILES['zipfile']['name'];
	$zipfile = md5(time() . $zipfileName)."_".$zipfileName;

	$img_dir2 = "assets/".$zipfile;

// upload the zip file
	if (move_uploaded_file($zipFile_loc, $img_dir2)) {
		// if zip file is uploaded
		// upload cove image
		if(move_uploaded_file($coverPicLoc, $img_dir)){
			// if cover image is uploaded 
			// inset the infor in the database
			$pdo = new Query();
			$pdo->save_post($title, $coverImg, $zipfile, $category, $description);
			echo "<script>alert('post successfull'); window.location = 'dashboard.php'</script>";
		}else{
			echo "<script>alert('error in upoading covrpic'); window.location = 'dashboard.php'</script>";
		}

	}else{
		echo "<script>alert('error in upoading zip file'); window.location = 'dashboard.php'</script>";
	}



}




//.......................... POST VIDEO PROCESSOR .................

if(isset($_POST['publish_video'])){


	$title = $_POST['title'];
	$link = $_POST['link'];
	$description = $_POST['editor2'];

	$pdo = new Query();
	if($pdo->save_video($title, $link, $description)){
		echo "<script>alert('post successfull'); window.location = 'dashboard.php'</script>";
	}else{
		echo "<script>alert('error in saving post '); window.location = 'dashboard.php'</script>";
	}

}

