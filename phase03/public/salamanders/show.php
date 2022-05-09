<?php
  require_once('../../private/initialize.php');

  $id = $_GET['id'] ?? '1' ;

  $page_title = 'Salamander Details' ;
  include(SHARED_PATH . '/salamander-header.php');
  
?>

<html>
  <h2>Salamander Details</h2>

  <p>Page ID: <?php echo h($id); ?></p>

  <p>
    <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back To List</a>
  </p>
</html>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
