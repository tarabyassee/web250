<?php 
  require_once('../private/initialize.php');
  $page_title = 'Sightings';
  include(SHARED_PATH . '/public_header.php');
?>
    <div class="actions">
      <a class="action" href="<?php echo url_for('/new.php'); ?>">Add Bird</a>
    </div>
<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

    <table>
      <tr>
        <th>Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
        <th colspan="3">&nbsp;</th>
      </tr>

<?php

$birds = Bird::find_all();
?>
<?php foreach($birds as $bird) { ?>
      <tr>
        <td><?php echo h($bird->common_name); ?></td>
        <td><?php echo h($bird->habitat); ?></td>
        <td><?php echo h($bird->food); ?></td>>
        <td><?php echo h($bird->conservation()); ?></td>
        <td><?php echo h($bird->backyard_tips); ?></td>
        <td id="view"><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>
        <td id="view"><a href="edit.php?id=<?php echo $bird->id; ?>">Edit</a></td>
        <td id="view"><a href="delete.php?id=<?php echo $bird->id; ?>">Delete</a></td>
      </tr>
      <?php } ?>

    </table>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
