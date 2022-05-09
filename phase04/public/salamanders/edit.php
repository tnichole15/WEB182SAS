<?php 
  require_once('../../private/initialize.php');

  /*if(!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/edit.php'));
  }*/
  if(!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
  }

  $id = $_GET['id'];

  //$salamanderName = '';


  if (is_post_request()) {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';

    $result = update_salamander($salamander);
    redirect_to(url_for('salamanders/show.php?id=' . $id));

  }
  else {
    $salamander = find_salamander_by_id($id);
  }

  $pageTitle = "Edit";

  include(SHARED_PATH . '/salamander-header.php');

?>

<a href="index.php">&laquo; Back to List</a>

<h1>Edit Salamander</h1>

<div class="editpage">

  <form method="post" action="<?php url_for('salamanders/edit.php?id=' . h(u($id))); ?>">

    <p>
      <label>Salamander Name: </label><br>
      <input type="text" name="name" value="<?php echo h($salamander['name']); ?>">
      <br>
    </p>

    <p>
      <label>Habitat: </label><br>
      <textarea name="habitat" cols="50" rows="3" value="<?php echo h($salamander['habitat']); ?>"><?php echo h($salamander['habitat']); ?></textarea>
    </p>

    <p>
      <label>Description: </label><br>
      <textarea name="description" cols="50" rows="3" value="<?php echo h($salamander['description']); ?>"><?php echo h($salamander['description']); ?></textarea>
    </p>
    
    <br>
    <input type="submit" value="Edit Salamander"> 
  </form>

</div>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>