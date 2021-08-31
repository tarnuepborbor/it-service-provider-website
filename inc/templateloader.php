  <!-- Page header with logo and tagline-->
  <header class="py-5 bg-light border-bottom mb-4">
    <div class="container text-center">
        <div class="text-white">
            <h1 class=" display-1 text-white" id="site-name" style="text-shadow: 2px 2px 4px #000000; ">Free Document Templates</h1>
            <h3 class=" mb-0 text-white" style="text-shadow: 2px 2px 4px #000000;">We provide 5000+ templates for you free!</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 py-3">
                        <div class="input-group">
                            <input class="form-control form-control-lg bg-transparent" id="searchbox" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        </div>
                        <div id="search_result">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <a  href="#contact" class="btn mt-4  btn-lg" style="border:2px solid white; color:white; border-radius: 20px">Contact us now!</a>
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
                    <?php include('posts_loader.php'); ?>     
                    <hr>
            </div>
        </div>
    </div>