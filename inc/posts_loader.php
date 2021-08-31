
<?php 



$limit = 6;

if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

$start = ($page -  1)*$limit;

$pdo = new Query();
$data = $pdo->load_posts_on_page($start, $limit);

$postCounter = new Query();
$totalPosts = $postCounter->count_posts();
$pages = ceil($totalPosts/$limit);

?>

<?php 

while ($rows = $data->fetch()) {
  ?>
    <div class="col-md-4">
      <div class="card mb-4 w-100">
    <a href="download.php?postid=<?php echo $rows['id'] ?>"><img style="height: 335px" class="card-img-top" src="assets/<?php echo $rows['coverImg'] ?>" alt="..." /></a>
    <div class="card-body">
      <div class="small text-muted"><?php echo substr($rows['postDate'],0,10)  ?></div>
      <h2 class="card-title h4"><?php echo $rows['title'] ?></h2>
    <?php echo substr($rows['description'],0,100)  ?>...<br>
      <a class="btn btn-primary" href="download.php?postid=<?php echo $rows['id'] ?>">Download →</a>
    </div>
  </div>
    </div> 
  <?php 
}
?>
</div>


<div class="row pb-4 mt-4">
  <nav aria-label="Page navigation example shadow-lg">
    <ul class="pagination">

      <?php 
      if ($page > 1) {
        ?>
        <li class="page-item ">
          <a class="page-link" href="index.php?page=<?php echo $page-1 ?>" aria-label="Previous">
            Previous <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php 
      }

      ?>
      <?php 
      if($page < $pages){
        ?>

        <li class="page-item">
          <a class="page-link" href="index.php?page=<?php echo $page+1 ?>" aria-label="Next">
            Next <span aria-hidden="true">&raquo;</span>
          </a>
        </li>

        <?php 
      }

      ?>
      <li class="page-item disabled bg-dark text-white">
        <a class="page-link disabled" href="#>" aria-label="Next">
         <i>You are on <?php echo $page."/".$pages; ?></i>
       </a>
     </li>
   </ul>
 </nav>
</div>


