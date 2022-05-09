<?php 

require_once(initialize);

if (!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
};

$id = $_GET['id'];

$salamanderName = '';

if (is_post_request()) {
  $salamanderName = $_POST['salamanderName'];
  echo "Salamander Name: $salamanderName<br>";
};

$pageTitle = "Edit";

include(SHARED_PATH . '/salamander-header.php');

?>

<a href="<?php url_for('/salamanders/index.php'); ?>"> &laquo; Back to List</a>  

<h1>Edit Salamander </h1>

<form action=" <?php url_for('salamanders/edit.php?id=' . h(u($id)); ?>"> </form>



