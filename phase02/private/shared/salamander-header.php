<?php
  if(!isset($page_title)) {
    $page_title = 'Salamanders'; 
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SAS <?php echo h($page_title); ?></title>
    <meta charset="utf-">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheet/salamanders.css'); ?>">
  </head>
  
  <body>
    <header>
      <h1><a href="<?php url_for('/'); ?>">Southern Appalachian Salamanders (SAS)</a></h1>
    </header>
    <nav>
      <ul>
        <li>
          <a href="<?= url_for('salamanders/'); ?>">Salamanders</a>
        </li>
      </ul>
    </nav>
