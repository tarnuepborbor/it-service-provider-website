<?php 
include('inc/admin_header.php');
include('inc/admin_navbar.php');
include('inc/model.php');
include('inc/add_admin_form.php');

?>

<div id="main">
	<button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
	
	<div class="container shadow-sm p-3 mt-3" style="width: 100%;">
		<div class="row">
			<div class="col-md-9">
				<h2 class="text-primary"></i>Site Users tables</h2>
				<p class="lead">Use the tabs below to view  your admins and site users. <span class="text-danger">Donot delete users/members unless you are told to do so by your fellow admins</span></p>
			</div>
			<div class="col-md-3">
				<button class="btn text-white mb-2 shadow-lg btn-lg" class="nav-link" href="#" data-toggle="modal" data-target="#add_admin"  style="width: 100%; background:linear-gradient(135deg, #f2d50f 0%,#da0641 100%);"><i class="fa fa-2x fa-plus" aria-hidden="true"></i> Add Admin</button>
			</div>
		</div>
		<div class="" >
			<?php include("inc/users_table.php") ?>
		</div>
	</div>

</div>

<?php 
include('inc/profile.php');
include("inc/admin_footer.php");