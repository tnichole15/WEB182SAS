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

  /*
  if (is_post_request()) {
    $salamanderName = $_POST['name'];
  }
  */

  if (is_post_request()) {
    $salamander = $_POST['id'] ?? '';
    $salamander = $_POST['name'] ?? '';
    $salamander = $_POST['habitat'] ?? '';
    $salamander = $_POST['description'] ?? '';

    $result = insert_salamander($salamander);
    $newID = mysqli_insert_id($db);
    redirect_to(url_for('/salamanders/show.php?id=' . $newID));
  }
  else {
    $salamander = [];
    $salamander['id'] = '';
    $salamander['name'] = '';
    $salamander['habitat'] = '';
    $salamander['description'] = '';

    $salamander_set = find_all_salamanders();
    $salamander_count = mysqli_num_rows($salamander_set) + 1;
    mysqli_free_result($salamander_set);

  }


  $pageTitle = 'Create';

  include(SHARED_PATH . '/salamander-header.php');

?>

<section id="content">
  <h1>Create Salamander</h1>

  <form action="<?php echo url_for('/salamanders/create.php'); ?>" method="post"> 
    <label>Salamander Name: </label>
    <input type="text" name="name" value="Salamander Name">

    <br>
    <br>

    <label>Salamander Habitat: </label>
    <textarea name="habitat" cols="50" rows="3">Describe the Salamander's Habitat</textarea>

    <br>
    <br>

    <label>Salamander Description: </label>
    <textarea name="description" cols="50" rows="3">Describe the Salamander</textarea>

    <br>
    <br>


    <input type="submit" value="Create Salamander">
  </form>
</section>
<p>
  <a href="index.php">&laquo; Back to List</a>
</p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>