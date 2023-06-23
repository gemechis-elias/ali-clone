<?php
   // Fetch db
    require('./db.php');
  function get_safe_value($str){
    global $con;
    $str = mysqli_real_escape_string($con,$str);
      return $str;
  }
  // Function For Alert Message
  function alert($message){
?>
<script>
alert('<?php echo $message ?>');
</script>
<?php
  }
  function redirect($link){
    ?>
<script>
window.location.href = '<?php echo $link ?>';
</script>
<?php
    die();
  }

function createArticleCard($title, $img, $data, $category, $cat_id, $id, $color, $new, $trend, $marked) {
    echo '
    <article class="card">
      <a href="';
    
    if(isset($_SESSION['USER_LOGGED_IN'])) {
      if($marked) {
        echo 'remove-bookmark.php?id='.$id;
      }
      else {
        echo 'add-bookmark.php?id='.$id;
      }
    }
    else {
      echo 'bookmarks.php';
    }
    echo '" class="bookmark" title="';
    
    if($marked) {
      echo 'Remove from Bookmarks">
      <i class="fas fa-bookmark"></i>
    </a>';
    }
    else {
      echo 'Add to Bookmarks">
      <i class="far fa-bookmark"></i>
    </a>';
    }
    
    echo '<div class="card-img">
        <img src="./assets/images/articles/'.$img.'" />
      </div>
      <div>
        <div class="tag '.$color.'"><a href="articles.php?id='.$cat_id.'">'.$category.'</a></div>';
    if($new){
      echo '  <div class="tag tag-new">NEW</div>';
    }
    if($trend) {
      echo '  <div class="tag tag-trend"><a href="search.php?trending=1">TRENDING</a></div>';
    }
    echo '
        <h3 class="card-title" href="./article.html">
          '.$title.'
        </h3>
        <p class="card-data">
          '.$data.'
        </p>
        <a href="news.php?id='.$id.'" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
        </a>
      </div>
    </article>';
  }

  
?>
