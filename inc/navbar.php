
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg bg-light sticky-top " style=" color: black; font-weight: bolder; ">
    <div class="container p-0">
        <a class="navbar-brand  pl-2" href="index.php"><img src="assets/logo.png" style="height: 80px; width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars text-white fa-2x" ></i></button>
        <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto m-0 mb-lg-0">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="template.php">Templates</a></li>
                <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
                
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            
            <?php  
            if($_SESSION['userType']=="Admin"){
                echo '<li class="nav-item"><a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a></li>';
            }
                if($_SESSION['userType'] == "user" || $_SESSION['userType']== 'Admin')
                    {
                        echo '<li class="nav-item btn-danger rounded-0 btn btn-sm "><a class="nav-link text-white" aria-current="page" href="logout.php">Logout</a></li>';
                    }else{
                        echo '<li class="nav-item "><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a></li>';
                    }
            
            ?>
            

        </ul>
    </div>
</div>
</nav>