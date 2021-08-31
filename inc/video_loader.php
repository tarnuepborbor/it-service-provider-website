
<?php 



$limit = 6;

if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

$start = ($page -  1)*$limit;

$pdo = new Query();
$data = $pdo->load_videos_on_page($start, $limit);

$postCounter = new Query();
$totalPosts = $postCounter->count_videos();
$pages = ceil($totalPosts/$limit);

?>

<?php 

while ($rows = $data->fetch()) {
  $des = substr($rows['description'], 0, 50);
  ?>
  <div class="col-md-6">
    <div class="card mb-4 w-100 shadow-sm" style="border-radius: ">
      <div class="card-header " style="border-bottom: none;">
        <h3 class="lead text-primary"><?php echo $rows['title'] ?></h3>
      </div>
      <div class="card-body m-1 p-1">
        <?php echo $rows['link'] ?>
        <p><small><?php echo $des; ?></small></p>
      </div>
    </div>
  </div> 
  <?php 
}
?>

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


