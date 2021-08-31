<?php 

include('inc/header.php');
include('inc/model.php');
include('inc/navbar.php');
?>


<div class="container-fluid mb-4 pt-4 pb-4 landing_div" style="background-image: url(assets/jlfajkljdlaj.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; min-height: 400px; background-attachment: fixed;">
	<div class="row align-items-center text-center" style="min-height: 400px;">
		<div class="col-md-10 offset-md-1 text-white" >
			<h3 class="display-1 text-white text-center display" style="font-weight: bolder; font-size: 50px !important">Welcome to Samsong World</h3>
			<p class="lead mt-1 text-white" style="">
				We are technical digital geeks glue together to provide high quality but afordable digital services to our customers. Some of our popular services are graphic design, software development, web development, arcatchual design, and many more. We also provide free templates and as well as videos lessons for our subscribers to our site. What are you waiting for, smash the button below and connect with us.</p>

			<a  href="#contact" class="btn  btn-lg" style="border:2px solid white; color:white; border-radius: 20px">Contact Us</a>
		</div>
	</div>
</div>

<div class="container pt-4 mt-4">
	<div class="row pt-4 pb-4">
		<div class="col-md-10 offset-md-1 text-center">
			<h4 class="display-3 text-primary">Services We Offer</h4>
			<p class="lead"> With our versatiles tech-team, we off you the following: <i>desktop publishing, web design(for companies, individuals, organizations, etc), building constructions, electricals, flashing phones, software development.</i> We write project proposals, thesis, professional job applications and curriculum vitae and many more legal document.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card " style="border: none;" >
				<img src="assets/downloadx.jpg" class="img-fluid card-img-top zoom">
				<div class="card-body text-center ">
					<h4 class="card-title text-primary">Desktop Publishing</h4>
					<p class="card-text lead">We computerize documents, do graphic design, photocopy plus many-many more services.</p>
					<a href="template.php" class="card-link btn btn-outline-primary shadow-lg " style="border-radius: 20px">View Our Templates</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="border: none;" >
				<img src="assets/unnamed.jpg" class="img-fluid card-img-top zoom">
				<div class="card-body text-center">
					<h4 class="card-title text-primary">Web Design</h4>
					<p class="card-text lead">We design website, both front and backend for business, organizations and as well as companies.</p>
					<a href="http://borbor.epizy.com/display_projects.php" class="card-link btn btn-outline-primary shadow-lg " style="border-radius: 20px">View Our Templates</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="border: none;">
				<img src="assets/download (1).jfif"  class="zoom img-fluid card-img-top">
				<div class="card-body text-center">
					<h4 class="card-title text-primary">Computer Tutorials</h4>
					<p class="card-text lead">We provide 100% free  computer video lesson to help you improve your computer / digital skills </p>
					<a href="videos.php" class="card-link btn btn-outline-primary shadow-lg " style="border-radius: 20px">View/Watch videos</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid  bg mt-4">
	<div class="row p-4 " style="">

		<div class="col-md-6 p-4" >
			<!-- <img src="img/use.jpg" class="img  img-fluid"> -->
			<div class="img-magnifier-container" >
				<img id="myimage" src="assets/capture1.PNG" class="img-fluid w-100" >
			</div>
		</div>
		<div class="col-md-6  mt-4 pt-4 text-center">
			<h1 class=" display-4 text-primary">Acquire knowledge for free!</h1>
			<p class="mt-1 lead ">Be a benefactor of our free videos lessons exercises. Our videos lessons cover basics, intermediate and advance computer lessons which are all free on our website. <br><br>The World is moving fast very and so does technology. We provide lesson that can keep you update in every modern job environment. Surley you can't leave without checking some of our videos.
			</p>
			<p class="lead lead "></p>
			<div class="text-left">
				<a href="#" class="btn btn-lg btn-primary" style="border-radius: 10px"> Check out videos</a>
			</div>
		</div>
	</div>
</div>



<div class="container-fluid pb-4  bg-light">
	<div class="row bg-light">
		<div class="card ">
			<div class="card-body">
				<div class="row pt-4 pb-4">
					<div class="col-md-10 offset-md-1 mt-4 text-center">
						<h4 class=" mt-4 display-4  font-weight-bolder text-primary">Meet Our Dynamic Team</h4>
						<p class="lead">
							We can't hold back from troducing to you some of most of our dymaic tec leads. Each of which is over 10 years pluse experience numerous digital or tec services. Click or hover to read more about each of our team members
						</p>
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-4 p-0 m-0">
						<div class="card rounded-0 shadow-lg p-0" style="border: none;">
							<img src="assets/PGQzj6D1.png" class="card-img card-thumbnail zoom">
						</div>
					</div>
					<div class="col-md-4 p-0">
						<div class="card rounded-0 shadow-lg" style="border: none;" >
							<img src="assets/sam.jpg" class="card-img w-100 img-fluid zoom" id="profileImg">
						</div>
					</div>
					<div class="col-md-4 p-0">			
						<div class="card rounded-0 shadow-lg" style="border: none;" >
							<img src="assets/bgbg.jpg" class="card-img zoom w-100">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<?php 
include('inc/login_modal.php');
include('inc/footer.php');

