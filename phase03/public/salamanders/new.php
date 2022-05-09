<?php 
  require_once('../../private/initialize.php');

  $test = $_GET['test'] ?? '';

  if($test == '404') {
    error_404();
  }
  elseif($test == '500') {
    error_500();
  }
  elseif($test == 'redirect') {
    redirect_to(url_for('/salamanders/index.php'));
  }

  if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
  }

  $pageTitle = 'Create';

  include(SHARED_PATH . '/salamander-header.php');

?>

<section id="content">
  <h1>Create Salamander</h1>

  <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post"> 
    <label>Salamander Name: </label>
    <input type="text" name="salamanderName" value="">
    <br>
    <br>
    <input type="submit" value="Create Salamander">
  </form>
</section>
<p>
  <a href="index.php">&laquo; Back to List</a>
</p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>