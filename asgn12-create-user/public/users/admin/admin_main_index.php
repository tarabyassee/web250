<?php 
  require_once('../../../private/initialize.php'); 
  include(SHARED_PATH . '/admin_header.php'); 
?>

  <ul>
    <li><a href="<?php echo url_for('/users/admin/admin_index.php'); ?>">Manage Users</a></li>
    <li><a href="<?php echo url_for('/birds.php'); ?>">Manage Birds</a></li>
  </ul>

<?php include(SHARED_PATH . '/public_footer.php'); ?>