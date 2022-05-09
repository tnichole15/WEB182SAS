<?php
  require_once('../../private/initialize.php');

  $id = $_GET['id'] ?? '1' ;

  $salamander = find_salamander_by_id($id);

  $page_title = 'Salamander Details' ;
  include(SHARED_PATH . '/salamander-header.php');
  
?>

<html>
  <h2>Salamander Details</h2>

  <table border="1">
    <tr>
      <th>Salamander ID: </th>
      <th>Salamander Name: </th>
      <th>Salamander Habitat: </th>
      <th>Salamander Description: </th>
    </tr>
    <tr>
      <td>
        <?php echo h($salamander['id']); ?>
      </td>
      <td>
        <?php echo h($salamander['name']); ?>
      </td>
      <td>
        <?php echo h($salamander['habitat']); ?>
      </td>
      <td>
        <?php echo h($salamander['description']); ?>
      </td>
    </tr>

  </table>

  <p>Salamander ID: <?php echo h($id); ?></p>

  <p>
    <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back To List</a>
  </p>
</html>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
