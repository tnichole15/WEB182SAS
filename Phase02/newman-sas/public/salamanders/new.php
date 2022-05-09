<?php 
  require_once('../../private/initialize.php');

  if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
  }

  $pageTitle = 'Create';

  include(SHARED_PATH . '/salamander-header.php');

?>

<a href="<?= url_for('/salamander/index.php'); ?>">&laquo;  Back to List</a>