<?php 
  require_once('../../private/initialize.php'); 
  //echo "Salamander Name: $salamander";    
  
  
  if(is_post_request()) {
    $salamander = [];
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';
    
    insert_salamander($salamander);
    $newID = mysqli_insert_id($db);
    //redirect_to(url_for('salamanders/new.php?=' . $newID)); 
    redirect_to(url_for('salamanders/index.php'));
  }
  else {
    redirect_to(url_for('salamanders/new.php'));
  }
  
?>

