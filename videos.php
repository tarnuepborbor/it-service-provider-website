<?php 

include('inc/header.php');
include('inc/model.php');
include('inc/navbar.php');





?>
  <!-- Page header with logo and tagline-->
  <header class="py-5 bg-light border-bottom mb-4">
    <div class="container text-center">
        <div class="text-white">
            <h1 class="display-1 text-white" id="site-name">Free Educational Videos</h1>
            <h3 class=" mb-0 text-white" style="text-shadow: 2px 2px 4px #000000;">We provide 5000+ educational videos for you free!</h3>

            <a  href="#contact" class="btn mt-2 btn-lg" style="border:2px solid white; color:white; border-radius: 20px">Contact Us</a>
        </div>


    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-md-12">
            <!-- Nested row for non-featured blog posts-->
            <div class="row col-equal-height">
                    <!-- Blog post-->
                    <?php include('inc/video_loader.php'); ?>     
                    <hr>
            </div>
        </div>
    </div>
</div>
<?php 





include('inc/login_modal.php');
include('inc/footer.php');


